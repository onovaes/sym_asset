<?php

namespace App\Controller\Admin;

use App\Entity\Patrimonio;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class Patrimonio2CrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Patrimonio::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
