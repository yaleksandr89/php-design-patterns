<?php

namespace Structural\composite\Orders\Models;

use Structural\composite\Orders\Interfaces\CompositeInterface;
use Structural\composite\Orders\Traits\CompositeTrait;

class Order implements CompositeInterface
{
    use CompositeTrait;

    public $type = 'Заказ';
}
