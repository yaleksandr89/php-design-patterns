<?php

namespace Structural\composite\Orders\Traits;

use Structural\composite\Orders\Interfaces\CompositeInterface;
use Structural\composite\Orders\Interfaces\CompositeItemInterface;

trait CompositeTrait
{
    private array $compositeItems = [];

    public function setChildItem(CompositeItemInterface $item): void
    {
        $this->compositeItems[] = $item;
    }

    public function calcPrice()
    {
        if ($this->price) {
            return $this->price;
        }

        $this->price = 0;

        /** @var CompositeInterface $compositeItem */
        foreach ($this->compositeItems as $compositeItem) {
            $this->price += $compositeItem->calcPrice();
        }

        return $this->price;
    }
}
