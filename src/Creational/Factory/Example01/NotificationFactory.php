<?php

declare(strict_types=1);

namespace DesignPatternsBook\Creational\Factory\Example01;

use InvalidArgumentException;

/**
 * Фабрика для создания объектов уведомлений.
 *
 * Инкапсулирует логику выбора и создания нужного продукта.
 */
final class NotificationFactory
{
    public function build(NotificationType $type): NotificationInterface
    {
        return match ($type) {
            NotificationType::EMAIL => new EmailNotification(),
            NotificationType::SMS => new SmsNotification(),
        };
    }
}
