<?php

namespace Structural\composite\Orders\Models;

use Structural\composite\Orders\Interfaces\CompositeInterface;
use Structural\composite\Orders\Interfaces\CompositeItemInterface;
use Structural\composite\Orders\Traits\CompositeTrait;

class Ingredient implements CompositeItemInterface
{
    use CompositeTrait;

    public $type = 'Ингредиент';

    public function calcPrice()
    {
        if ($this->price) {
            return $this->price;
        }
        $this->price = rand(2,20);

        return $this->price;
    }
}
