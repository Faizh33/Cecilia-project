<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PrendreRdvController extends AbstractController
{
    #[Route('/prendre/rdv', name: 'prendre_rdv')]
    public function index(): Response
    {
        return $this->render('prendre_rdv/index.html.twig', [
            'controller_name' => 'PrendreRdvController',
        ]);
    }
}
