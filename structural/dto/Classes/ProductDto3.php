<?php

namespace Structural\Dto\Classes;

/**
 * Способ "любителей ООП"
 *
 * Инкапусуляция ради инкапусуляции
 *
 * Преследует 2 цели:
 * 1. Создание неизменяемого объекта
 * 2. Реализация инкапсуляция
 *
 * Чтобы код был "чистым" класс должен скрывать данные и предоставлять поведение.
 * Но в случае с ДТО этого не требуется. ДТО - - всего лишь структура данных, время жизни которой не должно быть долгим.
 * Создали, переделали в другую систему...все!
 */
class ProductDto3
{
    private int $id;
    private string $name;
    private int $categoryId;

    public function __construct(int $id, string $name, int $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
}
