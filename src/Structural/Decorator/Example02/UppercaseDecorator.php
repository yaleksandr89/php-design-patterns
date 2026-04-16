<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example02;

/**
 * Декоратор без общего базового класса.
 *
 * Сам хранит следующий объект в цепочке
 * и сам вызывает его перед добавлением своего поведения.
 */
final readonly class UppercaseDecorator implements TextInterface
{
    public function __construct(
        private TextInterface $text,
    ) {
    }

    public function render(): string
    {
        $result = $this->text->render();

        return mb_strtoupper($result);
    }
}
