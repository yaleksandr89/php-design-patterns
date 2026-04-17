<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\State\Example01;

/**
 * Состояние "Новый заказ".
 */
final readonly class NewOrderState implements OrderStateInterface
{
    public function pay(OrderContext $orderContext): void
    {
        echo 'Заказ оплачен' . PHP_EOL;

        $orderContext->setState(new PaidOrderState());
    }

    public function cancel(OrderContext $orderContext): void
    {
        echo 'Заказ отменён' . PHP_EOL;

        $orderContext->setState(new CancelledOrderState());
    }
}
