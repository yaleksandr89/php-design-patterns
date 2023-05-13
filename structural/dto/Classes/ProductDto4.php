<?php

namespace Structural\Dto\Classes;

/**
 * Расширенное использование.
 * Добавили методы создания объекта
 */
class ProductDto4
{
    public int $id;
    public string $name;
    public int $categoryId;

    public function createFromRequest($request): self
    {
        return self::createFromArray($request);
    }

    public static function createFromArray(array $data): self
    {
        $dto = new self();

        $dto->id = $data['id'];
        $dto->name = $data['name'];
        $dto->categoryId = $data['categoryId'];

        return $dto;
    }
}
