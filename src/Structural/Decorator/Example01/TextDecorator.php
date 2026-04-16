<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example01;

/**
 * Базовый декоратор.
 *
 * Хранит внутри другой объект того же контракта.
 * Это и есть композиция: декоратор "содержит" TextInterface.
 */
abstract class TextDecorator implements TextInterface
{
    public function __construct(
        protected TextInterface $text,
    ) {
    }
}
