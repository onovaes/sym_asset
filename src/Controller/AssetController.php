<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Request;

class AssetController extends AbstractController
{
    #[Route('/', name: 'app_asset')]
    public function index(Request $request): Response
    {
        $locale = $request->getLocale();

        $locale = 'pt';
        //dd($locale);

        // some logic to determine the $locale
        $request->setLocale($locale);
        return $this->render('asset/index.html.twig', [
            'controller_name' => 'AssetController',
        ]);
    }
}
