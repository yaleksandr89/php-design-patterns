<?php

namespace Structural\Facade;

use JetBrains\PhpStorm\NoReturn;
use Structural\Facade\Classes\Order;
use Structural\Facade\Classes\OrderSaveFacade;

class Controller
{
    private string $name = 'Фасад';

    #[NoReturn]
    public function facade(): void
    {
        $order = new Order();
        $data = $_SERVER; // в идеале это Request (данные которые забираем с фронта на обработку)

        (new OrderSaveFacade())->save($order, $data);

        dd($order);
    }
}
