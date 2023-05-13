<?php

namespace Structural\composite\Orders\Models;

use Structural\composite\Orders\Interfaces\CompositeInterface;
use Structural\composite\Orders\Traits\CompositeTrait;

class Product implements CompositeInterface
{
    use CompositeTrait;

    public $type = 'Продукт';
}
