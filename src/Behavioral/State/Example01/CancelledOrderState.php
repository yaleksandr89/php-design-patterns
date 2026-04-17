<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\State\Example01;

use RuntimeException;

/**
 * Состояние "Отменён".
 */
final readonly class CancelledOrderState implements OrderStateInterface
{
    public function pay(OrderContext $orderContext): void
    {
        throw new RuntimeException('Нельзя оплатить отменённый заказ');
    }

    public function cancel(OrderContext $orderContext): void
    {
        throw new RuntimeException('Заказ уже отменён');
    }
}
