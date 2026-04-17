<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Adapter\Example01;

/**
 * Внешний несовместимый класс.
 *
 * Предположим, это сторонняя библиотека или legacy-код,
 * который возвращает температуру в градусах Фаренгейта.
 */
final class ExternalTemperatureReader
{
    public function getTemperatureFahrenheit(): float
    {
        return 77.0;
    }
}
