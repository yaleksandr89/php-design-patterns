<?php

namespace Structural\Decorator\Decorators;

use Structural\Decorator\Interfaces\OrderUpdateInterface;
use Structural\Decorator\Models\Order;

abstract class OrderUpdateDecoratorAbstract implements OrderUpdateInterface
{
    protected OrderUpdateInterface $decorateObject;

    public function __construct(OrderUpdateInterface $decorateObject)
    {
        $this->decorateObject = $decorateObject;
    }

    public function run(Order $order, array $orderData): Order
    {
        $this->actionBefore();
        $this->actionMain($order, $orderData);
        $this->actionAfter();

        return $order;
    }

    protected function actionBefore()
    {
    }

    protected function actionMain($order, $orderData): Order
    {
        return $this->decorateObject->run($order, $orderData);
    }

    protected function actionAfter()
    {
    }
}
