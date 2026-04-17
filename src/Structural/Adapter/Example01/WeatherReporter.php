<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Adapter\Example01;

/**
 * Клиентский код.
 *
 * Работает только с ожидаемым контрактом
 * и ничего не знает о стороннем классе.
 */
final readonly class WeatherReporter
{
    public function __construct(
        private TemperatureProviderInterface $temperatureProvider,
    ) {
    }

    public function report(): string
    {
        $temperatureCelsius = $this->temperatureProvider->getTemperatureCelsius();

        return 'Температура: ' . round($temperatureCelsius, 2) . ' °C';
    }
}
