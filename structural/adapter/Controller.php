<?php

namespace Structural\Adapter;

use JetBrains\PhpStorm\NoReturn;
use Structural\Adapter\Classes\MediaLibraryAdapter;
use Structural\Adapter\Classes\MediaLibraryThirdParty;

class Controller
{
    private string $name = 'Адаптер';

    #[NoReturn]
    public function adapter(): void
    {
        // $mediaLibrary = new MediaLibrarySelfWritten();
        $mediaLibrary = new MediaLibraryAdapter(new MediaLibraryThirdParty()); // не совсем хороший вариант, лучше через интерфейс сделать
        // $mediaLibrary = new (new MediaLibraryThirdParty()); // не совсем хороший вариант, лучше через интерфейс сделать (в ларавель это делается через $bindings (файл AppServiceProvider.php))

        $result[] = $mediaLibrary->upload('ImageFile');
        $result[] = $mediaLibrary->get('ImageFile');

        dd(
            $mediaLibrary,
            $result
        );
    }
}
