<?php

namespace Generating\FactoryMethod\Classes\Form;

use Generating\AbstractFactory\Interfaces\GuiFactoryInterface;
use Generating\FactoryMethod\Interfaces\FormInterface;

abstract class AbstractForm implements FormInterface
{
    public function render(): array
    {
        $guiKit = $this->createGuiKit();

        $result[] = $guiKit->buildCheckBox()->draw();
        $result[] = $guiKit->buildButton()->draw();

        return $result;
    }

    abstract public function createGuiKit(): GuiFactoryInterface;
}
