<?php

namespace Generating\SimpleFactory\Classes;

use Exception;
use Fundamental\Delegation\Interfaces\MessengerInterface;
use Fundamental\Delegation\Messengers\EmailMessenger;
use Fundamental\Delegation\Messengers\SmsMessenger;
use Generating\SimpleFactory\Interfaces\MessengerSimpleFactoryInterface;

class MessengerSimpleFactory implements MessengerSimpleFactoryInterface
{
    /**
     * @throws Exception
     * В целом build() может возвращать не конкретно MessengerInterface, а другие объекты (логирование например)
     */
    public function build(string $type): MessengerInterface
    {
        switch ($type) {
            case 'email':
                $messenger = new EmailMessenger();
                $messenger
                    ->setSender('admin@site.com')
                    ->setRecipient('recipient@site.com')
                    ->setMessage('Bla bla bla... !EMAIL!');
                break;
            case 'sms':
                $messenger = new SmsMessenger();
                $messenger
                    ->setSender('+79998887766')
                    ->setRecipient('+75554443322')
                    ->setMessage('Bla bla bla... !SMS!');
                break;
            default:
                throw new Exception("Неверный тип объекта");
        }

        return $messenger;
    }
}
