<?php

namespace Generating\StaticFactory\Classes;

use Exception;
use Fundamental\Delegation\AppMessenger;
use Fundamental\Delegation\Interfaces\MessengerInterface;
use Generating\StaticFactory\Interfaces\MessengerStaticFactoryInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    /**
     * @throws Exception
     * В целом build() может возвращать не конкретно MessengerInterface, а другие объекты (логирование например)
     */
    public static function build(string $type = 'email'): MessengerInterface
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email':
                $messenger->toEmail();
                $sender = 'admin@site.com';
                break;
            case 'sms':
                $messenger->toSms();
                $sender = '+79998887766';
                break;
            default:
                throw new Exception("Неизвестный тип [$type]");
        }

        $messenger
            ->setSender($sender)
            ->setMessage('Bla bla bla...');

        return $messenger;
    }
}
