<?php

namespace Generating\LazyInitialization\Classes;

use Generating\LazyInitialization\Entity\User;

class LazyInitialization
{
    private User|null $user = null;

    public function getUser(): User
    {
        if (is_null($this->user)) {
            $user = new User();
            $user->name = 'Ivan';
            $user->email = 'test@test.com';
            $user->phone = '+79998887766';
            $user->create_at = '2023-01-01';

            return $user;
        }

        return $this->user;
    }
}
