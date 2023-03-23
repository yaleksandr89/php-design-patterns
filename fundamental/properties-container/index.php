<?php

use Fundamental\PropertiesContainer\Controller;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    dd((new Controller())->propertyContainer());
} catch (Throwable $exception) {
    dd($exception);
}
