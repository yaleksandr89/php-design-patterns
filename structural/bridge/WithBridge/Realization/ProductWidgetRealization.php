<?php

namespace Structural\Bridge\WithBridge\Realization;

use Structural\Bridge\Entities\Product;

class ProductWidgetRealization implements WidgetRealizationInterface
{
    public function __construct(
        public Product $product
    ) {
    }

    public function getId()
    {
        return $this->product->id;
    }

    public function getTitle()
    {
        return $this->product->name;
    }

    public function getDescription()
    {
        return $this->product->description;
    }
}
