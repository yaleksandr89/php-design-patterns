<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Adapter\Example01;

/**
 * Контракт, который ожидает клиентский код.
 *
 * Приложение работает через этот интерфейс
 * и не зависит от конкретной внешней реализации.
 */
interface TemperatureProviderInterface
{
    public function getTemperatureCelsius(): float;
}
