<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class InformathequeController extends AbstractController
{
    #[Route('/informatheque', name: 'app_informatheque')]
    public function index(): Response
    {
        return $this->render('informatheque/index.html.twig', [
            'controller_name' => 'InformathequeController',
        ]);
    }
}
