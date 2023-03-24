<?php

namespace Generating\Multiton\Traits;

use Generating\Multiton\Interfaces\MultitonInterface;

trait MultitonTrait
{
    protected static array $instance = [];

    private string $name;

    // Запрет прямого создания
    private function __construct()
    {
    }

    // Запрет клонирования

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    private function __clone(): void
    {
    }

    // Запрет десериализации
    private function __wakeup(): void
    {
    }

    public static function getInstance(string $instanceName): MultitonInterface
    {
        if (array_key_exists($instanceName, static::$instance)) {
            return static::$instance[$instanceName];
        }

        static::$instance[$instanceName] = new static();
        static::$instance[$instanceName]->setName($instanceName);

        return static::$instance[$instanceName];
    }
}
