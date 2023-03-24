<?php

namespace Generating\Multiton\Classes;

use Generating\Multiton\Interfaces\MultitonInterface;
use Generating\Multiton\Traits\MultitonTrait;

class SimpleMultiton implements MultitonInterface
{
    use MultitonTrait;

    private string $test;

    public function setTest(string $test): self
    {
        $this->test = $test;

        return $this;
    }
}
