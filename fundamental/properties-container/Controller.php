<?php

namespace Fundamental\PropertiesContainer;

use Exception;

class Controller
{
    private string $name = 'Контейнер свойств';

    /**
     * @throws Exception
     */
    public function propertyContainer(): Entity
    {
        $item = new Entity();
        $item->setTitle('Статья 1');
        $item->setCategory('Категория 1');

        // Работа контейнера свойств
        $item->setProperty('view_count', 100);

        $item->setProperty('last_update', '2023-01-01');
        $item->updateProperty('last_update', '2023-12-12');

        $item->setProperty('read_only', true);
        $item->deleteProperty('read_only');

        //dd($item->getProperty('read_only'));

        return $item;
    }
}
