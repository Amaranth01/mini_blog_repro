<?php

namespace App\Model\Manager;

use App\Model\Entity\User;

class UserManager
{
    private string $table = 'role';
    public function getUserByID(int $id): User
    {
        $user = new User;

        return $user;
    }
}