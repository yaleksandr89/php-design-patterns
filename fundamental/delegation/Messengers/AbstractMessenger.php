<?php

namespace Fundamental\Delegation\Messengers;

use Fundamental\Delegation\Interfaces\MessengerInterface;

abstract class AbstractMessenger implements MessengerInterface
{
    protected string $sender;
    protected string $recipient;
    protected string $message;

    public function setSender($sender): MessengerInterface
    {
        $this->sender = $sender;
        return $this;
    }

    public function setRecipient($recipient): MessengerInterface
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function setMessage($message): MessengerInterface
    {
        $this->message = $message;
        return $this;
    }

    public function send(): bool
    {
        return true;
    }
}
