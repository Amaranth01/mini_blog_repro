<?php

namespace App\Model\Manager;

use App\Model\Entity\DB;
use App\Model\Entity\User;

class UserRoleManager
{
     public function getUsersByRoleID(int $roleId) : array
     {
        $users = [];
        $usersQuery = DB::getPDO()->query("
            SELECT * FROM user WHERE id IN (SELECT user_fk FROM user_rolefk = $roleId)
        ");

        if($usersQuery) {
            foreach ($usersQuery->fetchAll() as $userData) {
                $user[] = (new User())
                    ->setId($userData['id'])
                    ->setEmail($userData['email'])
                    ->setAge($userData['age'])
                    ->setFirstname($userData['firstname'])
                    ->setLastname($userData['lastname'])
                    ->setPassword($userData['password'])
                ;
            }

        }

        return $users;
     }

     public function getRolesByUserId(): array
     {
        return [];
     }
}