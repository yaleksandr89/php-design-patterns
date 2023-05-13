<?php

namespace Structural\Decorator\Decorators;

class OrderUpdateDecoratorLogger extends OrderUpdateDecoratorAbstract
{

    protected function actionBefore(): void
    {
        dump(basename(str_replace('\\', '/', __METHOD__)) . ' | Log before');
    }

    protected function actionAfter(): void
    {
        dump(basename(str_replace('\\', '/', __METHOD__)) . ' | Log after');
    }
}
