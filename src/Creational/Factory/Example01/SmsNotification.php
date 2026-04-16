<?php

declare(strict_types=1);

namespace DesignPatternsBook\Creational\Factory\Example01;

/**
 * Конкретный продукт для отправки sms-уведомления.
 */
final class SmsNotification implements NotificationInterface
{
    public function send(string $message): string
    {
        return "Sms: $message";
    }
}
