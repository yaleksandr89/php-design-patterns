<?php

use Structural\Decorator\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $decorator = new Controller();
    $decorator->decorator();
} catch (Throwable $exception) {
    dd($exception);
}
