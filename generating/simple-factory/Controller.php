<?php

namespace Generating\SimpleFactory;

use Exception;
use Generating\SimpleFactory\Classes\MessengerSimpleFactory;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Простая фабрика';

    /**
     * @throws Exception
     */
    #[NoReturn]
    public function simpleFactory(): void
    {
        $messengerFactory = new MessengerSimpleFactory();

        $appMailMessenger = $messengerFactory->build('email');
        $appPhoneMessenger = $messengerFactory->build('sms');

        dd(
            $appMailMessenger,
            $appPhoneMessenger
        );
    }
}
