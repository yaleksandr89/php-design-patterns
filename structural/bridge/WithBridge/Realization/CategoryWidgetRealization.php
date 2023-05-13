<?php

namespace Structural\Bridge\WithBridge\Realization;

use Structural\Bridge\Entities\Category;

class CategoryWidgetRealization implements WidgetRealizationInterface
{
    public function __construct(
        public Category $category
    ) {
    }

    public function getId()
    {
        return $this->category->id;
    }

    public function getTitle()
    {
        return $this->category->name;
    }

    public function getDescription()
    {
        return $this->category->description;
    }
}
