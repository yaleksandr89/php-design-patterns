<?php

namespace Generating\SimpleFactory\Interfaces;

use Fundamental\Delegation\Interfaces\MessengerInterface;

interface MessengerSimpleFactoryInterface
{
    public function build(string $type): MessengerInterface;
}
