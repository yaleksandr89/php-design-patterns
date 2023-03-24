<?php

use Generating\Prototype\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $singleton = new Controller();
    $singleton->prototype();
} catch (Throwable $exception) {
    dd($exception);
}
