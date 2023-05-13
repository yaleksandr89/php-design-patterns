<?php

namespace Structural\Composite;

use JetBrains\PhpStorm\NoReturn;
use Structural\composite\Orders\Classes\ObjectsFactory;
use Structural\composite\Orders\Models\Order;

class Controller
{
    private string $name = 'Компоновщик';
    private ObjectsFactory $factory;
    private int $ingredientsCnt = 10;
    private array $ingredients = [];

    private int $productsCnt = 5;
    private array $products = [];

    private int $ordersCnt = 2;
    private array $orders = [];

    public function __construct()
    {
        $this->factory = new ObjectsFactory();
    }

    #[NoReturn]
    public function composite(): void
    {
        $this->initObjects();
        $this->calcPrices();
    }

    private function initObjects(): void
    {
        $this->ingredients = $this->factory->createIngredients($this->ingredientsCnt);
        $this->products = $this->factory->createProducts($this->productsCnt, $this->ingredients);
        $this->orders = $this->factory->createOrders($this->ordersCnt, $this->products);
    }

    #[NoReturn]
    private function calcPrices(): void
    {
        $result = [];

        /** @var Order $order */
        foreach ($this->orders as $order) {
            $result[] = [
              'order_id' => $order->id,
              'order_price' => $order->calcPrice()
            ];
        }

        dd(
            $this->orders,
            $result,
        );
    }
}
