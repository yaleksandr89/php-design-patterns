<?php

namespace Structural\Dto;

use JetBrains\PhpStorm\NoReturn;
use Structural\Dto\Classes\ProductDto;
use Structural\Dto\Classes\ProductDto2;
use Structural\Dto\Classes\ProductDto3;
use Structural\Dto\Classes\ProductDto4;

class Controller
{
    private string $name = 'Объект передачи данных';

    #[NoReturn]
    public function dto(): void
    {
        dump(new ProductDto());
        dump(new ProductDto2());
        dump(new ProductDto3(1, 'Test name', 32));
        dump(new ProductDto4());
        die;
    }
}
