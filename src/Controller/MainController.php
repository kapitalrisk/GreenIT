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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * Matches /*
     *
     * @Route("/{slug}", name="index", defaults={"slug": null})
     * @param string $slug
     * @return Response
     * @throws \Exception
     */
    public function index($slug)
    {
        $em = $this->getDoctrine()->getManager();
        if ($slug === null)
            $slug = bin2hex(random_bytes(8));

        $questions = $em->getRepository(FormQuestion::class)->findAll();
        return $this->render("::index.html.twig", ["questions" => $questions]);
    }
}