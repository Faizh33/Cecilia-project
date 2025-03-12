<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ChromotherapieController extends AbstractController
{
    #[Route('/chromotherapie', name: 'chromotherapie')]
    public function index(): Response
    {
        return $this->render('chromotherapie/index.html.twig', [
            'controller_name' => 'ChromotherapieController',
        ]);
    }
}
