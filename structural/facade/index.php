<?php

use Structural\Facade\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $adapter = new Controller();
    $adapter->facade();
} catch (Throwable $exception) {
    dd($exception);
}
