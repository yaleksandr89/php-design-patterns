<?php

namespace Structural\Bridge\WithBridge\Abstraction;

use Structural\Bridge\WithBridge\Realization\WidgetRealizationInterface;

abstract class WidgetAbstract
{
    private WidgetRealizationInterface $realization;

    public function setRealization(WidgetRealizationInterface $realization): void
    {
        $this->realization = $realization;
    }

    public function getRealization(): WidgetRealizationInterface
    {
        return $this->realization;
    }

    protected function viewLogic($viewData): void
    {
        $method = basename(str_replace('\\', '/', static::class)) . '::' . __FUNCTION__;
        dump(
            $method,
            $viewData
        );
    }
}

