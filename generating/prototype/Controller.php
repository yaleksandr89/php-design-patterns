<?php

namespace Generating\Prototype;

use Generating\Prototype\Classes\PrototypeDemo;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Прототип (клон)';

    #[NoReturn]
    public function prototype(): void
    {
        $prototypeDemo = new PrototypeDemo();

        dd($prototypeDemo->run());
    }
}
