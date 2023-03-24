<?php

use Generating\Builder\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $singleton = new Controller();
    $singleton->builder();
} catch (Throwable $exception) {
    dd($exception);
}
