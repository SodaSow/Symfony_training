<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/")
     */
public function home():Response
{
    return new Response('Test');
}

    /**
     * @Route("/contact")
     */
    public function contact():Response
    {
        return new Response('Contact page!');
    }

    /**
     * @Route("hello/{firstName<[A-Z a-z]+>}/{lastName<[A-Z a-z]+>}")
     */
    public function hello(string $firstName,string $lastName):Response
    {
        return new Response(sprintf('Coucou %s %s',$firstName, $lastName));
    }
}