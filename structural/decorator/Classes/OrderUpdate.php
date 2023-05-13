<?php

namespace Structural\Decorator\Classes;

use Structural\Decorator\Interfaces\OrderUpdateInterface;
use Structural\Decorator\Models\Order;

final class OrderUpdate implements OrderUpdateInterface
{
    public function run(Order $order, array $orderData): Order
    {
        dump(basename(str_replace('\\', '/', __METHOD__)) . 'Base update');
        return $order;
    }
}
