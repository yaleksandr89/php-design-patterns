<?php

namespace Fundamental\EventChannel\Classes;

use Fundamental\EventChannel\Interfaces\EventChannelInterface;
use Fundamental\EventChannel\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    public function __construct(
        private string $topic,
        private EventChannelInterface $eventChannel
    ) {
    }

    public function publish(string $data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}
