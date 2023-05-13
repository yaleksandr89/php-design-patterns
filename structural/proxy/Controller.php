<?php

namespace Structural\Proxy;

use JetBrains\PhpStorm\NoReturn;
use Structural\Proxy\Classes\ProxyImage;

class Controller
{
    private string $name = 'Заместитель (Proxy)';

    #[NoReturn]
    public function proxy(): void
    {
        $image = new ProxyImage('test.jpg');
        $image->display();
        $image->display();
    }
}
