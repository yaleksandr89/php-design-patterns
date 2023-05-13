<?php

namespace Structural\Bridge\WithoutBridge\Classes;

abstract class WidgetAbstract
{
    protected function viewLogic($viewData): void
    {
        $method = basename(str_replace('\\', '/', static::class)) . '::' . __FUNCTION__;
        dump(
            $method,
            $viewData
        );
    }
}

