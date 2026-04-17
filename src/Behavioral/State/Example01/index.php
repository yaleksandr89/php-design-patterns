<?php

declare(strict_types=1);

use DesignPatternsBook\Behavioral\State\Example01\NewOrderState;
use DesignPatternsBook\Behavioral\State\Example01\OrderContext;

require_once __DIR__ . '/../../../../vendor/autoload.php';

$order = new OrderContext(new NewOrderState());

$order->pay();     // Заказ оплачен
$order->cancel();  // Exception
