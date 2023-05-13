<?php

namespace Structural\Bridge\WithoutBridge\Classes\WidgetCategory;

use Structural\Bridge\Entities\Category;
use Structural\Bridge\WithoutBridge\Classes\WidgetAbstract;

class WidgetBigCategory extends WidgetAbstract
{
    public function run(Category $category): void
    {
        $viewData = $this->getRealizationLogic($category);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category): array
    {
        $id = $category->id;
        $description = $category->description;
        $bigTitle = $category->id . '::::' . $category->name;

        return compact('id', 'bigTitle', 'description');
    }
}
