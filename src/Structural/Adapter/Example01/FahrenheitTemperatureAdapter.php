<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Adapter\Example01;

/**
 * Адаптер.
 *
 * Реализует интерфейс, который ожидает приложение,
 * но внутри использует несовместимый внешний класс.
 *
 * Его задача — "перевести" один интерфейс в другой.
 */
final readonly class FahrenheitTemperatureAdapter implements TemperatureProviderInterface
{
    public function __construct(
        private ExternalTemperatureReader $externalTemperatureReader,
    ) {
    }

    public function getTemperatureCelsius(): float
    {
        $temperatureFahrenheit = $this->externalTemperatureReader->getTemperatureFahrenheit();

        return ($temperatureFahrenheit - 32) * 5 / 9;
    }
}
