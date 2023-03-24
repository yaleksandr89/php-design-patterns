<?php

namespace Generating\Multiton;

use Generating\Multiton\Classes\SimpleMultiton;
use Generating\Multiton\Classes\SimpleMultitonNext;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Пулл одиночек';

    #[NoReturn]
    public function singleton(): void
    {
        $multiton[] = SimpleMultiton::getInstance('mysql')->setTest('Mysql test');
        $multiton[] = SimpleMultiton::getInstance('mongo');

        $multiton[] = SimpleMultiton::getInstance('mysql');
        $multiton[] = SimpleMultiton::getInstance('mongo')->setTest('Mongo-test');;

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init';
        $multiton[] = $simpleMultitonNext;

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init2';
        $multiton[] = $simpleMultitonNext;

        dd($multiton);
    }
}
