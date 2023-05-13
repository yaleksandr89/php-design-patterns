<?php

namespace Structural\Decorator\Interfaces;

use Structural\Decorator\Models\Order;

interface OrderUpdateInterface
{
    public function run(Order $order, array $orderData): Order;
}
