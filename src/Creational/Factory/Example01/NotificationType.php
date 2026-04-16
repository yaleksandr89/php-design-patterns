<?php

declare(strict_types=1);

namespace DesignPatternsBook\Creational\Factory\Example01;

/**
 * Типы уведомлений.
 *
 * Убирает "магические строки" и делает код понятней.
 */
enum NotificationType: string
{
    case EMAIL = 'email';
    case SMS = 'sms';
}
