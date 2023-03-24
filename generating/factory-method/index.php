<?php

use Generating\FactoryMethod\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $factoryMethod = new Controller();
    $factoryMethod->factoryMethod();
} catch (Throwable $exception) {
    dd($exception);
}
