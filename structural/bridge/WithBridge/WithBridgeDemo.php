<?php

namespace Structural\Bridge\WithBridge;

use Structural\Bridge\Entities\Category;
use Structural\Bridge\Entities\Product;
use Structural\Bridge\WithBridge\Abstraction\WidgetBigAbstraction;
use Structural\Bridge\WithBridge\Abstraction\WidgetMiddleAbstraction;
use Structural\Bridge\WithBridge\Abstraction\WidgetSmallAbstraction;
use Structural\Bridge\WithBridge\Realization\CategoryWidgetRealization;
use Structural\Bridge\WithBridge\Realization\ProductWidgetRealization;

class WithBridgeDemo
{
    public function run(): void
    {
        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());

        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
        ];

        foreach ($views as $view) {
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }
}
