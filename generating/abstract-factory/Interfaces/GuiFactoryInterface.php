<?php

namespace Generating\AbstractFactory\Interfaces;

interface GuiFactoryInterface
{
    public function buildButton(): ButtonInterface;

    public function buildCheckBox(): CheckBoxInterface;
}
