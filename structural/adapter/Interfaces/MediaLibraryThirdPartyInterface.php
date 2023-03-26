<?php

namespace Structural\Adapter\Interfaces;

interface MediaLibraryThirdPartyInterface
{
    public function addMedia(string $pathToFile): string;

    public function getMedia(string $fileCode): string;
}
