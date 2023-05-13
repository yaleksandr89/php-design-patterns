<?php

namespace Structural\Dto\Classes;

/**
 * Продвинутый - добавлены методы предоставления информации
 */
class ProductDto2
{
    public int $id;
    public string $name;
    public int $categoryId;

    public function toArray(): array
    {
        return [];
    }

    public function toJson(): string
    {
        return '';
    }
}
