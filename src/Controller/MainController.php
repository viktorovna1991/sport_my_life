<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
        return $this->render('page/homepage.html.twig');

        // fun example of using the Twig service directly!
        //$html = $twigEnvironment->render('question/homepage.html.twig');
        //return new Response($html);

    }
}