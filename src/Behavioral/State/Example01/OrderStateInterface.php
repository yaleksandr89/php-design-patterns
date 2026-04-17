<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\State\Example01;

/**
 * Интерфейс состояния.
 *
 * Определяет поведение, которое зависит от состояния заказа.
 */
interface OrderStateInterface
{
    public function pay(OrderContext $orderContext): void;

    public function cancel(OrderContext $orderContext): void;
}
