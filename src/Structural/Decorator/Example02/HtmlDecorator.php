<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example02;

/**
 * Декоратор без общего базового класса.
 *
 * Получает результат предыдущего слоя
 * и добавляет HTML-обертку.
 */
final readonly class HtmlDecorator implements TextInterface
{
    public function __construct(
        private TextInterface $text,
    ) {
    }

    public function render(): string
    {
        $result = $this->text->render();

        return "<p>$result</p>";
    }
}
