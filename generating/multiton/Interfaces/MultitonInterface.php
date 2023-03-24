<?php

namespace Generating\Multiton\Interfaces;

interface MultitonInterface
{
    public static function getInstance(string $instanceName): self;
}
