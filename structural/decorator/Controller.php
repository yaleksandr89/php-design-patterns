<?php

namespace Structural\Decorator;

use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Декоратор';

    #[NoReturn]
    public function decorator(): void
    {
        //(new DecoratorApp())->run();
        (new DecoratorAppSettings())->run();
    }
}
