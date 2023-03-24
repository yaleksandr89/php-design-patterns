<?php

use Generating\StaticFactory\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $factoryMethod = new Controller();
    $factoryMethod->staticFactory();
} catch (Throwable $exception) {
    dd($exception);
}
