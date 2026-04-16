<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\Strategy\Example01;

/**
 * Контекст использования стратегий форматирования.
 *
 * Сам не знает деталей конкретного алгоритма, а работает через общий контракт.
 */
final readonly class TextProcessor
{
    public function __construct(
        private FormatterInterface $formatter
    ) {
    }

    public function process(string $text): string
    {
        //dump($this->formatter);
        return $this->formatter->format($text);
    }
}
