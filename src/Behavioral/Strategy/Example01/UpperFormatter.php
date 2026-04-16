<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\Strategy\Example01;

/**
 * Стратегия форматирования текста в верхний регистр.
 */
final class UpperFormatter implements FormatterInterface
{
    public function format(string $text): string
    {
        return mb_strtoupper($text);
    }
}
