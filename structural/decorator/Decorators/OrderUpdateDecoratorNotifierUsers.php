<?php

namespace Structural\Decorator\Decorators;

use Structural\Decorator\Models\Order;

class OrderUpdateDecoratorNotifierUsers extends OrderUpdateDecoratorAbstract
{
    protected function actionAfter(): void
    {
        dump('Users notified');
    }
}
