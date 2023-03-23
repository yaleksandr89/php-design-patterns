<?php

namespace Fundamental\EventChannel\Interfaces;

interface SubscriberInterface
{
    /**
     * Уведомление подписчика
     */
    public function notify(string $data);

    public function getName(): string;
}