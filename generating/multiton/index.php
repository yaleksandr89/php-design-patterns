<?php

use Generating\Multiton\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $singleton = new Controller();
    $singleton->singleton();
} catch (Throwable $exception) {
    dd($exception);
}
