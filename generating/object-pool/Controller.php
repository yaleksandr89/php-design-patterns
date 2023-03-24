<?php

namespace Generating\ObjectPool;

use Generating\ObjectPool\Classes\ObjectPullDemo;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Пул объектов';

    #[NoReturn]
    public function objectPool(): void
    {
        $objectPullDemo = new ObjectPullDemo();
        $objectPullDemo->run();

        dd($objectPullDemo);
    }
}
