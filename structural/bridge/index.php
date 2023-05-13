<?php

use Structural\Bridge\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $bridge = new Controller();
    $bridge->bridge();
} catch (Throwable $exception) {
    dd($exception);
}
