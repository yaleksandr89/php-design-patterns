<?php

use Fundamental\Delegation\AppMessenger;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

try {
    $app = new AppMessenger();

    // TO EMAIL
    $app
        ->setSender('test1@test1.com')
        ->setRecipient('test2@test2.com')
        ->setMessage('bla1 bla1 bla1 ...')
        ->send();
    //dump($app);

    //  TO SMS
    $app
        ->toSms()
        ->setSender('+79998887766')
        ->setRecipient('+75554443322')
        ->setMessage('bla2 bla2 bla2 ...')
        ->send();
    //dump($app);
} catch (Throwable $exception) {
    dd($exception);
}
