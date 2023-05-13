<?php

namespace Structural\Proxy\Classes;

use Structural\Proxy\Interfaces\ImageInterface;

class RealImage implements ImageInterface
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->loadFromDisk($filename);
    }

    public function display()
    {
        dump("Displaying " . $this->filename . "\n");
    }

    private function loadFromDisk($filename): void
    {
        dump("Loading " . $filename . " from disk\n");
    }
}
