<?php

namespace Structural\Decorator\Classes;

use Structural\Decorator\Decorators\OrderUpdateDecoratorLogger;
use Structural\Decorator\Decorators\OrderUpdateDecoratorNotifierManager;
use Structural\Decorator\Decorators\OrderUpdateDecoratorNotifierUsers;
use Structural\Decorator\Interfaces\OrderUpdateInterface;
use Structural\Decorator\Models\Order;

class OrderUpdateAdmin implements OrderUpdateInterface
{
    public function run(Order $order, array $orderData): Order
    {
        $updateDecorators = $this->createStackDecorators();

        return $updateDecorators->run($order, $orderData);
    }

    private function createStackDecorators(): OrderUpdateDecoratorNotifierUsers
    {
        $orderUpdateLogger = new OrderUpdateDecoratorLogger(new OrderUpdate());
        return new OrderUpdateDecoratorNotifierUsers($orderUpdateLogger);
    }
}
