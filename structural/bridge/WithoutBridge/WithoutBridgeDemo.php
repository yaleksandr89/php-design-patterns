<?php

namespace Structural\Bridge\WithoutBridge;

use Structural\Bridge\Entities\Category;
use Structural\Bridge\Entities\Product;
use Structural\Bridge\WithoutBridge\Classes\WidgetCategory\WidgetBigCategory;
use Structural\Bridge\WithoutBridge\Classes\WidgetCategory\WidgetMiddleCategory;
use Structural\Bridge\WithoutBridge\Classes\WidgetCategory\WidgetSmallCategory;
use Structural\Bridge\WithoutBridge\Classes\WidgetProduct\WidgetBigProduct;
use Structural\Bridge\WithoutBridge\Classes\WidgetProduct\WidgetMiddleProduct;
use Structural\Bridge\WithoutBridge\Classes\WidgetProduct\WidgetSmallProduct;

class WithoutBridgeDemo
{
    public function run(): void
    {
        $product = new Product();
        (new WidgetBigProduct())->run($product);
        (new WidgetMiddleProduct())->run($product);
        (new WidgetSmallProduct())->run($product);

        $category = new Category();
        (new WidgetBigCategory())->run($category);
        (new WidgetMiddleCategory())->run($category);
        (new WidgetSmallCategory())->run($category);
    }
}
