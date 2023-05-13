<?php

namespace Structural\Decorator;

use Structural\Decorator\Classes\OrderUpdate;
use Structural\Decorator\Decorators\OrderUpdateDecoratorLogger;
use Structural\Decorator\Decorators\OrderUpdateDecoratorNotifierManager;
use Structural\Decorator\Decorators\OrderUpdateDecoratorNotifierUsers;
use Structural\Decorator\Models\Order;

class DecoratorAppSettings
{
    // Имитация env конфига
    private const ENV_OPTIONS = [
        'fromWeb' => [
            [
                'name' => 'log',
                'enabled' => 1,
                'decorator_class' => OrderUpdateDecoratorLogger::class
            ],
            [
                'name' => 'notifyUser',
                'enabled' => 1,
                'decorator_class' => OrderUpdateDecoratorNotifierUsers::class
            ],
            [
                'name' => 'notifyManager',
                'enabled' => 1,
                'decorator_class' => OrderUpdateDecoratorNotifierManager::class
            ],
        ],
        'fromAdmin' => [
            [
                'name' => 'log',
                'enabled' => 0,
                'decorator_class' => OrderUpdateDecoratorLogger::class
            ],
            [
                'name' => 'notifyManager',
                'enabled' => 0,
                'decorator_class' => OrderUpdateDecoratorNotifierManager::class
            ],
        ]
    ];

    public function run(): void
    {
        $settings = $this->getEnabledSettings();
        $updateOrderObj = $this->createUpdater($settings);

        $order = new Order();
        $orderData = [];

        $updateOrderObj->run($order, $orderData);
    }

    // TODO: возможно стоить переделать/добавить отдельный метод на получение опции отдельной секции "fromWeb / fromAdmin". Но так как это имитация, забил
    // поэтому будут перебираться все опции.
    private function getEnabledSettings(): array
    {
        $settings = [];

        foreach (self::ENV_OPTIONS as $key => $envOption) {
            if (!is_array($envOption)){
                continue;
            }

            foreach ($envOption as $item) {
                if (0 === $item['enabled']) {
                    continue;
                }

                $settings[$key][] = $item;
            }
        }

        return $settings;
    }

    private function createUpdater(array $settings)
    {
        $updateOrderObj = new OrderUpdate();

        foreach ($settings as $setting) {
            foreach ($setting as $item) {
                $className = $item['decorator_class'];
                $updateOrderObj = (new $className($updateOrderObj));
            }
        }

        return $updateOrderObj;
    }
}
