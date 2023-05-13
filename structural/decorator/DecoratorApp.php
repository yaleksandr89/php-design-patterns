<?php

namespace Structural\Decorator;

use Structural\Decorator\Classes\OrderUpdate;
use Structural\Decorator\Classes\OrderUpdateAdmin;
use Structural\Decorator\Classes\OrderUpdateWeb;
use Structural\Decorator\Decorators\OrderUpdateDecoratorLogger;
use Structural\Decorator\Decorators\OrderUpdateDecoratorNotifierManager;
use Structural\Decorator\Decorators\OrderUpdateDecoratorNotifierUsers;
use Structural\Decorator\Interfaces\OrderUpdateInterface;
use Structural\Decorator\Models\Order;

class DecoratorApp
{
    public function run(): void
    {
        $order = new Order();
        $orderData = [];

        $updateOrderObj = $this->getUpdateOrderObj();
        $updateOrderObj->run($order, $orderData);
    }

    private function getUpdateOrderObj(): OrderUpdateInterface
    {
        // return new OrderUpdateDecoratorLogger(new OrderUpdate()); // просто пример

        //return new OrderUpdateWeb();
        return new OrderUpdateAdmin();
    }
}
