<?php

namespace Generating\Singleton\Classes;

class SimpleSingleton
{
    private static $instance = null;
    private string $test;

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

    public static function getInstance(): static
    {
        return static::$instance ?? (static::$instance = new static());
    }

    public function setTest(string $text): void
    {
        $this->test = $text;
    }
}
