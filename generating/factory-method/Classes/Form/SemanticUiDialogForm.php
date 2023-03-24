<?php

namespace Generating\FactoryMethod\Classes\Form;

use Generating\AbstractFactory\Factories\SemanticUiFactory;
use Generating\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new SemanticUiFactory();
    }
}
