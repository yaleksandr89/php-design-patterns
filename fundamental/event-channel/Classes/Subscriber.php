<?php

namespace Fundamental\EventChannel\Classes;

use Fundamental\EventChannel\Interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function notify(string $data)
    {
        $msg = "{$this->getName()} оповещен(-а) данными [$data]";
        dump($msg);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
