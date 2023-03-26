<?php

namespace Structural\Adapter\Classes;

use Structural\Adapter\Interfaces\MediaLibraryThirdPartyInterface;

/**
 * "Сторонняя библиотека", то есть модифицировать её нельзя
 */
class MediaLibraryThirdParty implements MediaLibraryThirdPartyInterface
{
    public function addMedia(string $pathToFile): string
    {
        dump(__METHOD__);
        return md5(__METHOD__ . $pathToFile);
    }

    public function getMedia(string $fileCode): string
    {
        dump(__METHOD__);
        return '';
    }
}
