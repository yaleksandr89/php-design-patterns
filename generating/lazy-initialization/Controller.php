<?php

namespace Generating\LazyInitialization;

use Generating\LazyInitialization\Classes\LazyInitialization;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Отложенная инициализация (Ленивая загрузка)';

    #[NoReturn]
    public function lazyLoading(): void
    {
        $lazyLoad = new LazyInitialization();

        $user[] = $lazyLoad->getUser()->name;
        $user[] = $lazyLoad->getUser()->email;
        $user[] = $lazyLoad->getUser()->phone;
        $user[] = $lazyLoad->getUser()->create_at;

        dd($user);
    }
}
