<?php

namespace Structural\composite\Orders\Interfaces;

interface CompositeInterface extends CompositeItemInterface
{
    public function setChildItem(CompositeItemInterface $item);
}