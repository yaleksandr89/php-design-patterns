<?php

use Structural\Adapter\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $adapter = new Controller();
    $adapter->adapter();
} catch (Throwable $exception) {
    dd($exception);
}
