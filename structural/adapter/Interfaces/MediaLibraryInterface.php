<?php

namespace Structural\Adapter\Interfaces;

interface MediaLibraryInterface
{
    public function upload(string $pathToFile): string;

    public function get(string $fileCode): string;
}
