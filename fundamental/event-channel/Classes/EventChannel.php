<?php

namespace Fundamental\EventChannel\Classes;

use Fundamental\EventChannel\Interfaces\EventChannelInterface;
use Fundamental\EventChannel\Interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    private array $topics = [];

    public function subscribe(string $topic, SubscriberInterface $subscriber): void
    {
        $this->topics[$topic][] = $subscriber;

        $msg = "{$subscriber->getName()} подписан(-а) на [$topic]";
        dump($msg);
    }

    /**
     * В реальном проекте $data необязательно текст, можно определить DTO и юзать её
     */
    public function publish(string $topic, string $data): void
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        /** @var SubscriberInterface $subscriber */
        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}
