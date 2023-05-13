<?php

namespace Structural\Decorator\Decorators;

use Structural\Decorator\Models\Order;

class OrderUpdateDecoratorNotifierManager extends OrderUpdateDecoratorAbstract
{
    protected function actionAfter(): void
    {
        dump('Manager notified');
    }
}
