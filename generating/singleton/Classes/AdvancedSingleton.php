<?php

namespace Generating\Singleton\Classes;

use Generating\Singleton\Traits\SingletonTrait;

class AdvancedSingleton
{
    use SingletonTrait;

    private string $test;

    public function setTest(string $text): void
    {
        $this->test = $text;
    }
}
