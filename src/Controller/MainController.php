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
            $arrKeys = array_filter($_POST, function ($k) { return $k != ""; }); // get array keys for answered questions
            $questions = $em->getRepository(FormQuestion::class)->getAnsweredQuestions($arrKeys);

            foreach ($questions as $q)
            {
                $res = $em->getRepository(Answer::class)->findOneBy(['question' => $q, 'user' => $slug]);
                if ($res === null)
                {
                    $res = new Answer();
                }
                if (is_array($_POST[$q->getId()]))
                {
                    $res->setChoice(join(";", $_POST[$q][0]));
                }
                else
                {
                    $res->setQuestion($q);
                    $res->setUser($slug);
                    $res->setChoice($_POST[$q->getId()]);
                }
                $em->persist($res);
            }
            $em->flush();
            return new Response();
        }
        else
        {
            $cachedQuestions = $this->get('cache.app')->getItem('formQuestions');
            $answers = $em->getRepository(Answer::class)->getAnswers($slug);

            if (!$cachedQuestions->isHit())
            {
                $questions = $em->getRepository(FormQuestion::class)->getAll();
                $cachedQuestions->set($questions);
                $this->get('cache.app')->save($cachedQuestions);
            }
            else
            {
                $questions = $cachedQuestions->get();
            }
            foreach ($answers as $answer)
            {
                $q = $answer->getQuestion();
                $questions[$q->getId() - 1]->setAnswer($answer);
            }
            return $this->render("index.html.twig", ["questions" => $questions]);
        }
    }
}