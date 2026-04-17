<?php

declare(strict_types=1);

use DesignPatternsBook\Structural\Adapter\Example01\ExternalTemperatureReader;
use DesignPatternsBook\Structural\Adapter\Example01\FahrenheitTemperatureAdapter;
use DesignPatternsBook\Structural\Adapter\Example01\WeatherReporter;

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Adapter — позволяет объектам с несовместимыми интерфейсами работать вместе.
 *
 * В паттерне обычно есть:
 * - контракт, который ожидает приложение
 * - несовместимый внешний класс
 * - адаптер
 * - клиентский код
 */

$externalTemperatureReader = new ExternalTemperatureReader();
$temperatureProvider = new FahrenheitTemperatureAdapter($externalTemperatureReader);
$weatherReporter = new WeatherReporter($temperatureProvider);

echo $weatherReporter->report(); // Температура: 25.0 °C
