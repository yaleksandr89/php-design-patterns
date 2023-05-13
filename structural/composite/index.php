<?php

use Structural\Composite\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $composite = new Controller();
    $composite->composite();
} catch (Throwable $exception) {
    dd($exception);
}
