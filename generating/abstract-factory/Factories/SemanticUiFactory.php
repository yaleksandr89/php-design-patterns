<?php

namespace Generating\AbstractFactory\Factories;

use Generating\AbstractFactory\Classes\ButtonSemanticUi;
use Generating\AbstractFactory\Classes\CheckBoxSemanticUi;
use Generating\AbstractFactory\Interfaces\ButtonInterface;
use Generating\AbstractFactory\Interfaces\CheckBoxInterface;
use Generating\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxSemanticUi();
    }
}
