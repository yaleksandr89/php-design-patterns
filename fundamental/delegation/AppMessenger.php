<?php

namespace Fundamental\Delegation;

use Fundamental\Delegation\Interfaces\MessengerInterface;
use Fundamental\Delegation\Messengers\EmailMessenger;
use Fundamental\Delegation\Messengers\SmsMessenger;

class AppMessenger implements MessengerInterface
{
    private string $name = 'Делегирование';

    private MessengerInterface $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail(): static
    {
        $this->messenger = new EmailMessenger();
        return $this;
    }

    public function toSms(): static
    {
        $this->messenger = new SmsMessenger();
        return $this;
    }

    public function setSender($sender): MessengerInterface
    {
        $this->messenger->setSender($sender);
        return $this->messenger;
    }

    public function setRecipient($recipient): MessengerInterface
    {
        $this->messenger->setRecipient($recipient);
        return $this->messenger;
    }

    public function setMessage($message): MessengerInterface
    {
        $this->messenger->setMessage($message);
        return $this->messenger;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }
}
