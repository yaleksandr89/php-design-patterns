<?php

namespace Generating\FactoryMethod;

use Generating\FactoryMethod\Classes\Form\BootstrapDialogForm;
use Generating\FactoryMethod\Classes\Form\SemanticUiDialogForm;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Фабричный метод';

    #[NoReturn]
    public function factoryMethod(): void
    {
        //$dialogForm = new BootstrapDialogForm();
        $dialogForm = new SemanticUiDialogForm();

        dd($dialogForm->render());
    }
}
