<?php

namespace Generating\ObjectPool\Entity;

use Generating\ObjectPool\Interfaces\ObjectPullableInterface;

class CreditCard implements ObjectPullableInterface
{
    public string|null $cardId = null;

    public string|null $cardHolder = null;

    public string|null $cardPwd = null;

    public function __clone(): void
    {
    }
}
