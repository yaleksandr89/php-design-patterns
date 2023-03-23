<?php

use Behavioral\Strategy\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $strategy = new Controller();
    $strategy->strategy();
} catch (Throwable $exception) {
    dd($exception);
}
