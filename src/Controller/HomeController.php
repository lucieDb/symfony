<?php 

nameSpace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        $name = "Lucie";
        // return new Response('<body>Accueil</body>');
        return $this->render('home.html.twig', [
            'name' => $name,
        ]);
    }
}