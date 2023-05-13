<?php

namespace Structural\Bridge;

use JetBrains\PhpStorm\NoReturn;
use Structural\Bridge\WithBridge\WithBridgeDemo;
use Structural\Bridge\WithoutBridge\WithoutBridgeDemo;

class Controller
{
    private string $name = 'Мост';

    #[NoReturn]
    public function bridge(): void
    {
        // (new WithoutBridgeDemo())->run(); // без применения шаблона
        (new WithBridgeDemo())->run(); // с применением шаблона
    }
}
