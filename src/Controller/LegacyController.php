<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LegacyController extends AbstractController
{
    #[Route('/legacy', name: 'legacy')]
    public function index(): Response
    {
        return $this->render('legacy/index.html.twig', [
            'controller_name' => 'LegacyController',
        ]);
    }
}
