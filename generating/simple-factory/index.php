<?php

use Generating\SimpleFactory\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $simpleFactory = new Controller();
    $simpleFactory->simpleFactory();
} catch (Throwable $exception) {
    dd($exception);
}
