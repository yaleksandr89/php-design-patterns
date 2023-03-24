<?php

namespace Generating\ObjectPool\Entity;

use Generating\ObjectPool\Interfaces\ObjectPullableInterface;
use Generating\Singleton\Traits\SingletonTrait;
use RuntimeException;

class ObjectPull
{
    use SingletonTrait;

    private array $clones = [];

    private array $prototypes = [];

    public function addObject(ObjectPullableInterface $object): self
    {
        $key = $this->getObjectKey($object);
        // в идеале проверка на дубли
        $this->prototypes[$key] = $object;

        return $this;
    }

    private function getObjectKey(object|string $object): string
    {
        if (is_object($object)) {
            $key = $object::class;
        } elseif (is_string($object)) {
            $key = $object;
        } else {
            throw new RuntimeException('???');
        }

        return $key;
    }

    public function getObject(string $className): bool|object
    {
        $key = $this->getObjectKey($className);

        if (isset($this->clones[$key])) {
            return false;
        }

        if (empty($this->prototypes[$key])) {
            return true;
        }

        $this->clones[$key] = clone $this->prototypes[$key];
        return $this->clones[$key];
    }

    public function release(ObjectPullableInterface &$object): void
    {
        $key = $this->getObjectKey($object);
        unset($this->clones[$key]);
        $object = null;
    }
}