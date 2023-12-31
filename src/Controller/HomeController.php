<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{
    
    #[Route('/', name:'home')]
    public function home (){
        return $this->render ('home/accueil.html.twig');
    }

    #[Route('/classement', name:'classement')]
    public function classement (): Response {
        return $this->render ('home/classement.html.twig');
    }

    #[Route('/creation', name:'creation')]
    public function creation (): Response {
        return $this->render ('entreprises/creation.html.twig');
    }

    #[Route('/entreprises', name:'entreprises')]
    public function entreprise (): Response {
        return $this->render ('entreprises/entreprises_liste.html.twig');
    }
}