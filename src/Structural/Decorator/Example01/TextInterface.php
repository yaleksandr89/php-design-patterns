<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example01;

/**
 * Контракт для всех объектов текста.
 *
 * Через этот интерфейс приложение работает
 * и с базовым объектом, и с декораторами.
 */
interface TextInterface
{
    public function render(): string;
}
