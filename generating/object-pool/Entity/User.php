<?php

namespace Generating\ObjectPool\Entity;

use Generating\ObjectPool\Interfaces\ObjectPullableInterface;

class User implements ObjectPullableInterface
{
    public string|null $name = null;

    public function __clone(): void
    {
    }
}