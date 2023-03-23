<?php

namespace App\Controller\Admin;

use App\Entity\Asset;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;

class AssetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Asset::class;
    }

    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Asset')
            ->setEntityLabelInPlural('Assets')
            ->setSearchFields(['name'])
            ->setDefaultSort(['created_at' => 'DESC'])
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield Field::new('id')->onlyOnIndex();
        yield TextField::new('name')->setColumns(8);
        yield MoneyField::new('purchase_price')->setCurrency('USD')->setColumns(2);
        yield DateField::new('purchase_date')->setColumns(2);

        yield TextEditorField::new('description')->hideOnIndex()->setColumns(8);

        yield DateTimeField::new('created_at')->onlyOnIndex();
        yield DateTimeField::new('updated_at')->onlyOnIndex();
    }
    
}
