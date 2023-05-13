<?php

namespace Structural\composite\Orders\Classes;

use Faker\Factory as Faker;
use Faker\Generator as FakerGenerator;
use Structural\composite\Orders\Models\Ingredient;
use Structural\composite\Orders\Models\Order;
use Structural\composite\Orders\Models\Product;

class ObjectsFactory
{
    private FakerGenerator $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function createIngredients(int $ingredientsCnt): array
    {
        $result = [];

        for ($i = 1; $i <= $ingredientsCnt; $i++) {
            $result[] = $this->createIngredient($i);
        }

        return $result;
    }

    private function createIngredient(int $id): Ingredient
    {
        $obj = new Ingredient();
        $obj->id = $id;
        $obj->name = $this->faker->colorName();

        return $obj;
    }

    public function createProducts(int $productsCnt, array $ingredients): array
    {
        $result = [];

        for ($i = 1; $i <= $productsCnt; $i++) {
            $productIngredients = $this->getRandomItemArr($ingredients, 3);

            $result[] = $this->createProduct($i, $productIngredients);
        }

        return $result;
    }

    private function createProduct(int $id, array $ingredients): Product
    {
        $obj = new Product();
        $obj->id = $id;
        $obj->name = $this->faker->company();

        foreach ($ingredients as $ingredient) {
            $obj->setChildItem($ingredient);
        }

        return $obj;
    }

    public function createOrders(int $ordersCnt, array $products): array
    {
        $result = [];

        for ($i = 1; $i <= $ordersCnt; $i++) {
            $orderProducts = $this->getRandomItemArr($products, 2);

            $result[] = $this->createOrder($i, $orderProducts);
        }

        return $result;
    }

    private function createOrder(int $id, array $children): Order
    {
        $obj = new Order();
        $obj->id = $id;
        $obj->name = "order{$id}";

        foreach ($children as $child) {
            $obj->setChildItem($child);
        }

        return $obj;
    }

    private function getRandomItemArr(array $objects, int $count = 5): array
    {
        $result = [];
        $randomKeys = array_rand($objects, min(count($objects), $count));

        foreach ($randomKeys as $randomKey) {
            $result[] = $objects[$randomKey];
        }

        return $result;
    }
}
