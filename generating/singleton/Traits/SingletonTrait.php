<?php

namespace Generating\Singleton\Traits;

trait SingletonTrait
{
    private static $instance = null;

    // Запрет прямого создания
    private function __construct()
    {
    }

    // Запрет клонирования
    private function __clone(): void
    {
    }

    // Запрет десериализации
    private function __wakeup(): void
    {
    }

    public static function getInstance(): static
    {
        return static::$instance ?? (static::$instance = new static());
    }
}
