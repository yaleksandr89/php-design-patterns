<?php

declare(strict_types=1);

namespace DesignPatternsBook\Creational\Factory\Example01;

/**
 * Контракт для продуктов.
 *
 * Определяет единый интерфейс для всех типов уведомлений.
 */
interface NotificationInterface
{
    public function send(string $message): string;
}
