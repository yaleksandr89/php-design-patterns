<?php

declare(strict_types=1);

use DesignPatternsBook\Creational\Factory\Example01\NotificationFactory;
use DesignPatternsBook\Creational\Factory\Example01\NotificationType;

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Factory — инкапсулирует создание объектов.
 *
 * В паттерне обычно есть:
 * - контракт продукта
 * - конкретные продукты
 * - фабрика
 */

$notificationFactory = new NotificationFactory();

$emailNotification = $notificationFactory->build(NotificationType::EMAIL);
echo $emailNotification->send('Hello') . PHP_EOL;

echo '<hr>' . PHP_EOL;

$smsNotification = $notificationFactory->build(NotificationType::SMS);
echo $smsNotification->send('Hello') . PHP_EOL;
