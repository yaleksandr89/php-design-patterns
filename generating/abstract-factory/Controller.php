<?php

namespace Generating\AbstractFactory;

use Exception;
use Generating\AbstractFactory\Interfaces\GuiFactoryInterface;
use JetBrains\PhpStorm\NoReturn;

class Controller
{
    private string $name = 'Абстрактная фабрика';
    private GuiFactoryInterface $guiKit;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->guiKit = (new GuiKitFactory())->getFactory('bootstrap');
        // $this->guiKit = (new GuiKitFactory())->getFactory('semanticui');
        // $this->guiKit = (new GuiKitFactory())->getFactory('unknown');
    }

    #[NoReturn]
    public function abstractFactory(): void
    {
        $result[] = $this->guiKit->buildButton()->draw();
        $result[] = $this->guiKit->buildCheckBox()->draw();

        dd($result);
    }
}
