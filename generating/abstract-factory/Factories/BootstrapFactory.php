<?php

namespace Generating\AbstractFactory\Factories;

use Generating\AbstractFactory\Classes\ButtonBootstrap;
use Generating\AbstractFactory\Classes\CheckBoxBootstrap;
use Generating\AbstractFactory\Interfaces\ButtonInterface;
use Generating\AbstractFactory\Interfaces\CheckBoxInterface;
use Generating\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}
