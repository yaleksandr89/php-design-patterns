<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\Strategy\Example01;

/**
 * Стратегия форматирования текста в HTML.
 */
final class HtmlFormatter implements FormatterInterface
{
    public function format(string $text): string
    {
        return "<p>$text</p>";
    }
}
