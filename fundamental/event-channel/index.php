<?php

use Fundamental\EventChannel\EventChannelJob;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $eventChannelJob = new EventChannelJob();
    $eventChannelJob->run();
} catch (Throwable $exception) {
    dd($exception);
}
