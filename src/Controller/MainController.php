<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 19:26
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * Matches /*
     *
     * @Route("/{slug}", name="index", defaults={"slug": null})
     * @param string $slug
     * @return Response
     */
    public function index($slug)
    {
        if ($slug === null)
            $slug = "null";
        return new Response("The slug is \"$slug\"");
    }
}