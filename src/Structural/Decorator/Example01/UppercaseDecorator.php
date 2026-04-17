<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example01;

/**
 * Конкретный декоратор.
 *
 * Сначала получает результат предыдущего слоя (...text->render...),
 * потом преобразует его в верхний регистр (mb_strtoupper($result)).
 */
final class UppercaseDecorator extends TextDecorator
{
    public function render(): string
    {
        $result = $this->text->render();

        return mb_strtoupper($result);
    }
}
