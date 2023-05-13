<?php

use Structural\Proxy\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $dto = new Controller();
    $dto->proxy();
} catch (Throwable $exception) {
    dd($exception);
}
