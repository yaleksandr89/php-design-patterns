<?php

declare(strict_types=1);

return [

    'Behavioral' => [
        'title' => 'Поведенческие',
        'patterns' => [
            [
                'name' => 'Strategy',
                'description' => 'Позволяет менять алгоритм во время выполнения.',
                'isImplemented' => true,
                'examples' => [
                    [
                        'name' => 'Example01',
                        'title' => 'Базовый пример форматирования текста',
                        'url' => '/src/Behavioral/Strategy/Example01/index.php',
                        'isImplemented' => true,
                        'structure' => [
                            'Контракт для стратегий' => 'FormatterInterface',
                            'Стратегии' => 'HtmlFormatter, UpperFormatter',
                            'Контекст' => 'TextProcessor',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Pipeline',
                'description' => 'Пропускает данные через последовательность обработчиков.',
                'isImplemented' => false,
                'examples' => [],
            ],
        ],
    ],

    'Creational' => [
        'title' => 'Порождающие',
        'patterns' => [
            [
                'name' => 'Factory',
                'description' => 'Инкапсулирует создание объектов.',
                'isImplemented' => true,
                'examples' => [
                    [
                        'name' => 'Example01',
                        'title' => 'Создание уведомлений через фабрику',
                        'url' => '/src/Creational/Factory/Example01/index.php',
                        'isImplemented' => true,
                        'structure' => [
                            'Контракт продукта' => 'NotificationInterface',
                            'Конкретные продукты' => 'EmailNotification, SmsNotification',
                            'Фабрика' => 'NotificationFactory',
                            'Типы' => 'NotificationType',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'AbstractFactory',
                'description' => 'Создаёт семейства связанных объектов.',
                'isImplemented' => false,
                'examples' => [],
            ],
        ],
    ],

    'Structural' => [
        'title' => 'Структурные',
        'patterns' => [
            [
                'name' => 'Decorator',
                'description' => 'Позволяет динамически добавлять поведение объекту через композицию.',
                'isImplemented' => true,
                'examples' => [
                    [
                        'name' => 'Example01',
                        'title' => 'Классический декоратор с базовым декоратором',
                        'url' => '/src/Structural/Decorator/Example01/index.php',
                        'isImplemented' => true,
                        'structure' => [
                            'Контракт' => 'TextInterface',
                            'Базовый объект' => 'PlainText',
                            'Базовый декоратор' => 'TextDecorator',
                            'Конкретные декораторы' => 'UppercaseDecorator, HtmlDecorator',
                        ],
                    ],
                    [
                        'name' => 'Example02',
                        'title' => 'Декоратор без базового декоратора',
                        'url' => '/src/Structural/Decorator/Example02/index.php',
                        'isImplemented' => true,
                        'structure' => [
                            'Контракт' => 'TextInterface',
                            'Базовый объект' => 'PlainText',
                            'Конкретные декораторы' => 'UppercaseDecorator, HtmlDecorator',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Adapter',
                'description' => 'Позволяет объектам с несовместимыми интерфейсами работать вместе.',
                'isImplemented' => true,
                'examples' => [
                    [
                        'name' => 'Example01',
                        'title' => 'Адаптация внешнего сервиса температуры к интерфейсу приложения',
                        'url' => '/src/Structural/Adapter/Example01/index.php',
                        'isImplemented' => true,
                        'structure' => [
                            'Контракт' => 'TemperatureProviderInterface',
                            'Несовместимый внешний класс' => 'ExternalTemperatureReader',
                            'Адаптер' => 'FahrenheitTemperatureAdapter',
                            'Клиентский код' => 'WeatherReporter',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Bridge',
                'description' => 'Разделяет абстракцию и реализацию.',
                'isImplemented' => false,
                'examples' => [],
            ],
            [
                'name' => 'Composite',
                'description' => 'Позволяет работать с древовидными структурами как с единым объектом.',
                'isImplemented' => false,
                'examples' => [],
            ],
        ],
    ],

];
