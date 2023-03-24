<?php

namespace Generating\Prototype\Entity;

use DateTime;

class Order
{
    public function __construct(
        public string $id,
        public DateTime $deliveryDt,
        private Client $client,
    ) {
    }

    public function __clone(): void
    {
        $date = clone $this->deliveryDt;

        $this->id = $this->id . '_clone';
        $this->deliveryDt = clone $this->deliveryDt;

        $this->client->addOrder($this);
    }
}
