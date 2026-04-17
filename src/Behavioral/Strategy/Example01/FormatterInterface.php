<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\Strategy\Example01;

/**
 * Контракт стратегий форматирования.
 *
 * Определяет единый интерфейс для всех алгоритмов форматирования текста.
 */
interface FormatterInterface
{
    public function format(string $text): string;
}
