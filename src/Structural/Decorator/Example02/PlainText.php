<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example02;

/**
 * Базовый объект.
 *
 * Возвращает исходный текст без изменений.
 */
final readonly class PlainText implements TextInterface
{
    public function __construct(
        private string $text,
    ) {
    }

    public function render(): string
    {
        return $this->text;
    }
}
