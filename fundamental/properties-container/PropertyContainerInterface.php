<?php

namespace Fundamental\PropertiesContainer;

interface PropertyContainerInterface
{
    function setProperty($propertyName, $value);
    function deleteProperty($propertyName);
    function getProperty($propertyName);
    function updateProperty($propertyName, $value);
}
