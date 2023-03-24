<?php

namespace Generating\AbstractFactory\Classes;

use Generating\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxSemanticUi implements CheckBoxInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
