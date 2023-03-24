<?php

use Generating\AbstractFactory\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $abstractFactory = new Controller();
    $abstractFactory->abstractFactory();
} catch (Throwable $exception) {
    dd($exception);
}
