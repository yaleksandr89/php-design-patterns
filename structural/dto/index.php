<?php

use Structural\Dto\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $dto = new Controller();
    $dto->dto();
} catch (Throwable $exception) {
    dd($exception);
}
