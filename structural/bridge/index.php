<?php

use Structural\Bridge\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $adapter = new Controller();
    $adapter->bridge();
} catch (Throwable $exception) {
    dd($exception);
}
