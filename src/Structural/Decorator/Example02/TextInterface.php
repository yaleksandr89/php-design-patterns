<?php

declare(strict_types=1);

namespace DesignPatternsBook\Structural\Decorator\Example02;

/**
 * Контракт для базового объекта и декораторов.
 */
interface TextInterface
{
    public function render(): string;
}
