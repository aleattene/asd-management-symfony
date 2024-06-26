<?php

namespace App\Controller\Admin;

use App\Entity\Trainer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TrainerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Trainer::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('surname'),
            // Aggiungi altri campi in base alla tua entità
        ];
    }

}
