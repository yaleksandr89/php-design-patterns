<?php

namespace Generating\ObjectPool\Entity;

use Generating\ObjectPool\Interfaces\ObjectPullableInterface;

class Calculator implements ObjectPullableInterface
{
    public string|null $memory = null;
    public function __clone(): void
    {
    }
}