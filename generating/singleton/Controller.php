<?php

namespace Generating\Singleton;

use Exception;
use Generating\Singleton\Classes\AdvancedSingleton;
use Generating\Singleton\Classes\SimpleSingleton;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Одиночка';

    /**
     * @throws Exception
     */
    #[NoReturn]
    public function singleton(): void
    {
        // Простой способ создания одиночки
        $result['simple_singleton1'] = SimpleSingleton::getInstance();
        $result['simple_singleton1']->setTest('Simple Singleton 1');
        $result['simple_singleton2'] = SimpleSingleton::getInstance();
        $result['checking_simple_singleton'] = $result['simple_singleton1'] === $result['simple_singleton2'];


        // Продвинутый способ создания одиночки
        $result['advanced_singleton1'] = AdvancedSingleton::getInstance();
        $result['advanced_singleton1']->setTest('Advanced Singleton 1');
        $result['advanced_singleton2'] = AdvancedSingleton::getInstance();
        $result['checking_advanced_singleton'] = $result['advanced_singleton1'] === $result['advanced_singleton2'];

        dd($result);
    }
}
