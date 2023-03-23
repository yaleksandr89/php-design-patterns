<?php

namespace Behavioral\Strategy;

use Behavioral\Entity\User;

interface SalaryStrategyInterface
{
    public function calc(array $period, User $user): int;

    public function getName(): string;
}
