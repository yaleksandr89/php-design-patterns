<?php

namespace Structural\Bridge\WithoutBridge\Classes\WidgetCategory;

use Structural\Bridge\Entities\Category;
use Structural\Bridge\WithoutBridge\Classes\WidgetAbstract;

class WidgetSmallCategory extends WidgetAbstract
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
        $smallTitle = substr($category->name, 0, 3);

        return compact('id', 'smallTitle', 'description');
    }
}
