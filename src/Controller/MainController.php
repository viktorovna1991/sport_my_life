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

    /**
     * @Route("/courses", name="app_courses")
     */
    public function courses(Environment $twigEnvironment)
    {
        return $this->render('page/courses.html.twig');

    }

    /**
     * @Route("/teacher", name="app_teacher")
     */
    public function teacher(Environment $twigEnvironment)
    {
        return $this->render('page/teacher.html.twig');

    }

    /**
     * @Route("/about", name="app_about")
     */
    public function about(Environment $twigEnvironment)
    {
        return $this->render('page/about.html.twig');

    }

    /**
     * @Route("/pricing", name="app_pricing")
     */
    public function pricing(Environment $twigEnvironment)
    {
        return $this->render('page/pricing.html.twig');

    }

    /**
     * @Route("/blog", name="app_blog")
     */
    public function blog(Environment $twigEnvironment)
    {
        return $this->render('page/blog.html.twig');

    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(Environment $twigEnvironment)
    {
        return $this->render('page/contact.html.twig');

    }
}