<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HideoutsController extends AbstractController
{
    #[Route('/hideouts', name: 'hideouts')]
    public function index(): Response
    {
        return $this->render('hideouts/index.html.twig', [
            'controller_name' => 'HideoutsController',
        ]);
    }
}
