<?php

declare(strict_types=1);

return [
    'Behavioral' => [
        'title' => 'Поведенческие',
        'patterns' => [
            [
                'name' => 'Strategy',
                'description' => 'Позволяет менять алгоритм во время выполнения.',
                'url' => '/src/Behavioral/Strategy/Example01/index.php',
                'isImplemented' => true,
                'structure' => [
                    'Контракт для стратегий' => 'FormatterInterface',
                    'Стратегии' => 'HtmlFormatter, UpperFormatter',
                    'Контекст' => 'TextProcessor',
                ],
            ],
            [
                'name' => 'Pipeline',
                'description' => 'Пропускает данные через последовательность обработчиков.',
                'url' => null,
                'isImplemented' => false,
                'structure' => [
                    'Контракт шага' => 'PipelineStageInterface',
                    'Шаги' => '...',
                    'Конвейер' => 'Pipeline',
                ],
            ],
        ],
    ],
    'Creational' => [
        'title' => 'Порождающие',
        'patterns' => [
            [
                'name' => 'Factory',
                'description' => 'Инкапсулирует создание объектов.',
                'url' => '/src/Creational/Factory/Example01/index.php',
                'isImplemented' => true,
                'structure' => [
                    'Контракт продукта' => 'NotificationInterface',
                    'Конкретные продукты' => 'EmailNotification, SmsNotification',
                    'Фабрика' => 'NotificationFactory',
                ],
            ],
        ],
    ],
    'Structural' => [
        'title' => 'Структурные',
        'patterns' => [
            [
                'name' => 'Decorator',
                'description' => 'Позволяет динамически добавлять поведение объекту через композицию.',
                'url' => '/src/Structural/Decorator/Example01/index.php',
                'isImplemented' => false,
                'structure' => [
                    'Контракт' => 'TextInterface',
                    'Базовый объект' => 'PlainText',
                    'Базовый декоратор' => 'TextDecorator',
                    'Конкретные декораторы' => 'UppercaseDecorator, HtmlDecorator',
                ],
            ],
        ],
    ],
];
