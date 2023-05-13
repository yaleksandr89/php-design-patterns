<?php

namespace Structural\Dto\Classes;

/**
 * Расширенное использование.
 * Добавили методы создания объекта
 */
class CreateProductDtoFactory
{
    public function fromRequest($request): ProductDto
    {
        return self::fromArray($request);
    }

    public static function fromArray(array $data): ProductDto
    {
        $dto = new ProductDto();

        $dto->id = $data['id'];
        $dto->name = $data['name'];
        $dto->categoryId = $data['categoryId'];

        return $dto;
    }
}
