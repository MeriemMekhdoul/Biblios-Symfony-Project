<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnotherController extends AbstractController{
    #[Route('/another', name: 'app_another')]
    public function index(): Response
    {
        return $this->render('another/index.html.twig', [
            'controller_name' => 'AnotherController',
        ]);
    }
}
