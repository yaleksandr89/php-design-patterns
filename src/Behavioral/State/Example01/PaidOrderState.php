<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\State\Example01;

use RuntimeException;

/**
 * Состояние "Оплачен".
 */
final readonly class PaidOrderState implements OrderStateInterface
{
    public function pay(OrderContext $orderContext): void
    {
        throw new RuntimeException('Заказ уже оплачен');
    }

    public function cancel(OrderContext $orderContext): void
    {
        throw new RuntimeException('Нельзя отменить оплаченный заказ');
    }
}
