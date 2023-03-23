<?php

namespace Fundamental\PropertiesContainer;

use Exception;

class PropertyContainer implements PropertyContainerInterface
{
    private array $propertyContainer = [];

    /**
     * @throws Exception
     */
    function setProperty($propertyName, $value)
    {
        if (isset($this->propertyContainer[$propertyName])) {
            throw new Exception("property [$propertyName] is exist");
        }

        $this->propertyContainer[$propertyName] = $value;
    }

    function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @throws Exception
     */
    function updateProperty($propertyName, $value): void
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new Exception("property [$propertyName] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}
