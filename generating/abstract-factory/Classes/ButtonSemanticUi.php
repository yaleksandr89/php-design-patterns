<?php

namespace Generating\AbstractFactory\Classes;

use Generating\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
