<?php

namespace Structural\Bridge;

use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Мост';

    #[NoReturn]
    public function bridge(): void
    {
        dd($_SERVER);
    }
}
