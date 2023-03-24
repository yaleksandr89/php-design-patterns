<?php

namespace Generating\StaticFactory;

use Exception;
use Generating\StaticFactory\Classes\StaticFactory;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Статичная фабрика';

    /**
     * @throws Exception
     */
    #[NoReturn]
    public function staticFactory(): void
    {
        $appMailMessenger = StaticFactory::build();
        $appPhoneMessenger = StaticFactory::build('sms');

        dd(
            $appMailMessenger,
            $appPhoneMessenger
        );
    }
}
