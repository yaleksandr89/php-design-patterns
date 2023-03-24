<?php

use Generating\LazyInitialization\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $singleton = new Controller();
    $singleton->lazyLoading();
} catch (Throwable $exception) {
    dd($exception);
}
