<?php

declare(strict_types=1);

namespace DesignPatternsBook\Behavioral\State\Example01;

/**
 * Контекст.
 *
 * Хранит текущее состояние и делегирует ему поведение.
 */
final class OrderContext
{
    private OrderStateInterface $orderState;

    public function __construct(OrderStateInterface $orderState)
    {
        $this->orderState = $orderState;
    }

    public function setState(OrderStateInterface $orderState): void
    {
        $this->orderState = $orderState;
    }

    public function pay(): void
    {
        $this->orderState->pay($this);
    }

    public function cancel(): void
    {
        $this->orderState->cancel($this);
    }
}
