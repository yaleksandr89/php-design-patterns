<?php

namespace Generating\AbstractFactory\Classes;

use Generating\AbstractFactory\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw(): string
    {
        return __CLASS__;
    }
}
