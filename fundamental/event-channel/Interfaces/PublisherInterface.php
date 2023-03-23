<?php

namespace Fundamental\EventChannel\Interfaces;

interface PublisherInterface
{
    /**
     * Уведомление подписчиков
     * @param string $data данные, которыми получит подписчик
     */
    public function publish(string $data);
}
