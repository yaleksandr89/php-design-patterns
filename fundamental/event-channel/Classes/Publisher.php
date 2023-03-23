<?php

namespace Fundamental\EventChannel\Classes;

use Fundamental\EventChannel\Interfaces\EventChannelInterface;
use Fundamental\EventChannel\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    private string $topic;
    private EventChannelInterface $eventChannel;

    public function __construct(string $topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }

    public function publish(string $data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}
