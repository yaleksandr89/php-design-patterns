<?php

namespace Fundamental\Delegation\Interfaces;

interface MessengerInterface
{
    public function setSender($sender): MessengerInterface;

    public function setRecipient($recipient): MessengerInterface;

    public function setMessage($message): MessengerInterface;

    public function send(): bool;
}
