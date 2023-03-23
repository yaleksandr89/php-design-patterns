<?php

namespace Fundamental\EventChannel\Interfaces;

/**
 * Интерфейс канала событий
 * Связующее звено между подписчиками и издателями
 */
interface EventChannelInterface
{
    /**
     * Подписчик $subscriber подписывается на событие (данные, информацию и т.д.) $topic
     */
    public function subscribe(string $topic, SubscriberInterface $subscriber): void;

    /**
     * Издатель уведомляет канал о том что надо
     * всех кто подписан на тему $topic уведомить данными $data
     */
    public function publish(string $topic, string $data): void;
}
