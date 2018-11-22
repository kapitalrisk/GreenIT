<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 19:26
 */

namespace App\Controller;


use App\Entity\FormQuestion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
            $slug = bin2hex(random_bytes(8));

        if ($request->getMethod() == "POST")
        {
            print_r($_POST);
        }
        else
        {
            $questions = $em->getRepository(FormQuestion::class)->getAll();
            return $this->render("index.html.twig", ["questions" => $questions]);
        }
    }
}