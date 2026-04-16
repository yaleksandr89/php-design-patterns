<?php

declare(strict_types=1);

namespace DesignPatternsBook\Creational\Factory\Example01;

/**
 * Конкретный продукт для отправки email-уведомления.
 */
final class EmailNotification implements NotificationInterface
{
    public function send(string $message): string
    {
        return "Email: $message";
    }
}
