<?php

namespace Structural\Bridge\WithBridge\Abstraction;

use Structural\Bridge\WithBridge\Realization\WidgetRealizationInterface;

class WidgetMiddleAbstraction extends WidgetAbstract
{
    public function run(WidgetRealizationInterface $realization): void
    {
        $this->setRealization($realization);

        $viewData = $this->getViewData();
        $this->viewLogic($viewData);
    }

    private function getViewData(): array
    {
        $id = $this->getRealization()->getId();
        $bigTitle = $this->getFullTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'bigTitle', 'description');
    }

    private function getFullTitle(): string
    {
        return $this->getRealization()->getId() . '->' . $this->getRealization()->getTitle();
    }
}
