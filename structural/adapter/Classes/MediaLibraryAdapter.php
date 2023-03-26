<?php

namespace Structural\Adapter\Classes;

use RuntimeException;
use Structural\Adapter\Interfaces\MediaLibraryInterface;
use Structural\Adapter\Interfaces\MediaLibraryThirdPartyInterface;

class MediaLibraryAdapter implements MediaLibraryInterface
{
    public function __construct(
        private MediaLibraryThirdPartyInterface $adapterObject
    ) {
    }

    public function upload(string $pathToFile): string
    {
        return $this->adapterObject->addMedia($pathToFile);
    }

    public function get(string $fileCode): string
    {
        return $this->adapterObject->getMedia($fileCode);
    }

    /**
     * К адаптеру не относится, сделано для удобства, что бы дергать у сторонней библиотеке её методы
     */
    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->adapterObject, $name)) {
            // return $this->adapterObject->$name($arguments);
            return call_user_func_array([$this->adapterObject, $name], $arguments);
        } else {
            throw new RuntimeException("Метод [$name] не найден");
        }
    }
}
