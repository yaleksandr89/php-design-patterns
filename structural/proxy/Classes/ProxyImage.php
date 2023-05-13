<?php

namespace Structural\Proxy\Classes;

use Structural\Proxy\Interfaces\ImageInterface;

class ProxyImage implements ImageInterface
{
    private $filename;
    private $realImage;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function display()
    {
        if (null === $this->realImage) {
            $this->realImage = new RealImage($this->filename);
        }

        $this->realImage->display();
    }
}
