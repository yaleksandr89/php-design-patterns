<?php

namespace Generating\AbstractFactory;

use Exception;
use Generating\AbstractFactory\Factories\BootstrapFactory;
use Generating\AbstractFactory\Factories\SemanticUiFactory;
use Generating\AbstractFactory\Interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    /**
     * @throws Exception
     */
    public function getFactory(string $type): GuiFactoryInterface
    {
        return match ($type) {
            'bootstrap' => new BootstrapFactory(),
            'semanticui' => new SemanticUiFactory(),
            default => throw new Exception("Неизвестный тип фабрики [$type]"),
        };
    }
}
