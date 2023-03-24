<?php

use Generating\ObjectPool\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $singleton = new Controller();
    $singleton->objectPool();
} catch (Throwable $exception) {
    dd($exception);
}
