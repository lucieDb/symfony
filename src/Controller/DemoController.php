<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /** Le paramètre doit obligatoirement être un nombre (sécurité en +)
     * \d+ = digital nbr
     * @Route("/demo/{id}", name="demo", requirements={"id"="\d+"})
     */
    public function index($id = null)
    {

        dump($id);
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'id' => $id,
        ]);
    }
}
