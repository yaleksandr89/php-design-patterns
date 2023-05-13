<?php

namespace Structural\Bridge\WithoutBridge\Classes\WidgetProduct;

use Structural\Bridge\Entities\Product;
use Structural\Bridge\WithoutBridge\Classes\WidgetAbstract;

class WidgetMiddleProduct extends WidgetAbstract
{
    public function run(Product $product): void
    {
        $viewData = $this->getRealizationLogic($product);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product): array
    {
        $id = $product->id;
        $description = $product->description;
        $middleTitle = $product->id . '->' . $product->name;

        return compact('id', 'middleTitle', 'description');
    }
}
