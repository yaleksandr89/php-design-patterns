<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example01;

/**
 * Конкретный декоратор.
 *
 * Сначала вызывает предыдущий слой(...text->render...),
 * потом добавляет HTML-обертку (<p>$result</p>).
 */
final class HtmlDecorator extends TextDecorator
{
    public function render(): string
    {
        $result = $this->text->render();

        return "<p>$result</p>";
    }
}
