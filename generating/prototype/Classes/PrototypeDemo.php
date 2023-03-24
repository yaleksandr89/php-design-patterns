<?php

namespace Generating\Prototype\Classes;

use DateInterval;
use DateTime;
use Generating\Prototype\Entity\Client;
use Generating\Prototype\Entity\Order;

class PrototypeDemo
{
    public function run(): array
    {
        $client = new Client(2, 'Клиент');

        $deliveryDt = new DateTime('-2 days');
        $order = new Order(11, $deliveryDt, $client);

        $client->addOrder($order);

        $cloneOrder = clone $order;
        $cloneOrder->deliveryDt->add(new DateInterval('P10D'));

        return compact('client', 'order', 'cloneOrder');
    }
}
