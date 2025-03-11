<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
    //first param: chemin du controller relatif au dossier templates
    //snd param -opt: tab des variables que je veux rendre accessible dans le template
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
