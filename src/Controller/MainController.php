<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 19:26
 */

namespace App\Controller;


use App\Entity\Answer;
use App\Entity\FormQuestion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * Matches /*
     *
     * @Route("/{slug}", name="index", defaults={"slug": null})
     * @param Request $request
     * @param string $slug
     * @return Response
     * @throws \Exception
     */
    public function index(Request $request, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        if ($slug === null)
        {
            do {
               $slug = bin2hex(random_bytes(8));
           } while ($em->getRepository(Answer::class)->tokenExists($slug));
            return $this->redirectToRoute("index", ["slug" => $slug]);
        }

        if ($request->getMethod() == "POST")
        {
            $result = [];
            foreach ($_POST as $key => $value)
            {
                if (!$value)
                    continue;
                $id = str_replace('text', '', $key);
                $result[$id] = [];
            }
            foreach ($_POST as $key => $value)
            {
                if (!$value)
                    continue;
                $id = str_replace('text', '', $key);
                array_push($result[$id], $value);
            }
            print_r($result);
            /** @var FormQuestion[] $questions */
            $questions = $em->getRepository(FormQuestion::class)->getAnsweredQuestions($result);
            foreach ($questions as $question)
            {
                $answer = new Answer();
                $answer->setQuestion($question);
                $answer->setUser($slug);
                $value = $result[$question->getId()];
                if (is_array($value[0]))
                {
                    print_r($value[0]);
                    $answer->setChoice(implode(";", $value[0]));
                }
                else
                {
                    $answer->setChoice($value[0]);
                    if (isset($value[1]))
                        $answer->setContent($value[1]);
                }
                $em->persist($answer);
            }
            $em->flush();
            return new Response();
        }
        else
        {
            /** @var Answer[] $answers */
            $answers = $em->getRepository(Answer::class)->getAnswers($slug);
            /** @var FormQuestion[] $questions */
            $questions = $em->getRepository(FormQuestion::class)->getAll();
            foreach ($answers as $answer)
            {
                $q = $answer->getQuestion();
                $questions[$q->getId()]->setAnswer($answer);
            }
            return $this->render("index.html.twig", ["questions" => $questions]);
        }
    }
}