<?php

namespace Behavioral\Strategy\Strategies;

use Behavioral\Entity\User;
use Behavioral\Strategy\SalaryStrategyInterface;

abstract class AbstractStrategy implements SalaryStrategyInterface
{
    public function calc(array $period, User $user): int
    {
        return rand(500, 2000);
    }

    public function getName(): string
    {
        return static::class;
    }
}
