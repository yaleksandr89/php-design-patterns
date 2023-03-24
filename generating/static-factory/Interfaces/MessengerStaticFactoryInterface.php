<?php

namespace Generating\StaticFactory\Interfaces;

use Fundamental\Delegation\Interfaces\MessengerInterface;

interface MessengerStaticFactoryInterface
{
    public static function build(string $type = 'email'): MessengerInterface;
}