<?php

namespace Generating\FactoryMethod\Classes\Form;

use Generating\AbstractFactory\Factories\BootstrapFactory;
use Generating\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}
