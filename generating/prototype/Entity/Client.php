<?php

namespace Generating\Prototype\Entity;

class Client
{
    public array $orders;

    public function __construct(
        public int $id,
        public string $name,
    ) {
    }

    public function addOrder(Order $order): void
    {
        $this->orders[$order->id] = $order;
    }
}
