<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatrimonioController extends AbstractController
{
    /**
     * @Route("/patrimonio", name="app_patrimonio")
     */
    public function index(): Response
    {
        return $this->render('patrimonio/index.html.twig', [
            'controller_name' => 'PatrimonioController',
        ]);
    }
}
