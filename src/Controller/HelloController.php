<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{prenom}", name="hello", requirements={"prenom"="[a-z]{3,8}"})
     */
    public function index($prenom = null)
    {
        return $this->render('hello/index.html.twig', [
            'prenom' => ucfirst($prenom),
        ]);
    }
}
