<?php

namespace App\Controller\Admin;

use App\Entity\Patrimonio;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sym Patrimonio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Conteúdo');
        yield MenuItem::linkToCrud('Patrimônio', 'fa fa-file-text', Patrimonio::class);

        // MenuItem::section('Users'),
        // MenuItem::linkToCrud('Comments', 'fa fa-comment', Comment::class),
        // MenuItem::linkToCrud('Users', 'fa fa-user', User::class),
    }
}
