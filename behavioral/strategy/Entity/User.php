<?php

namespace Behavioral\Entity;

class User
{
    public function __construct(
        public int $id,
        public string $fio,
        public string $departmentName
    ) {
    }
}
