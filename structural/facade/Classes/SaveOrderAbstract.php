<?php

namespace Structural\Facade\Classes;

abstract class SaveOrderAbstract
{
    public function __construct(
        protected Order $order,
        protected array $data
    ) {
    }

    public function run(): void
    {
        dump(static::class);
    }
}
