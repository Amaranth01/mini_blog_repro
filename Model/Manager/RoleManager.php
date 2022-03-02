<?php

namespace App\Model\Manager;

use App\Model\Entity\DB;

class RoleManager
{
    private string $table = 'roles';

    /**
     * @return array
     */

    public function findAll(): array
    {
        $roles = [];
        $query = DB::getPDO()->query("SELECT * FROM role");
        if($query) {
            foreach ($query->fetchAll() as $roleData) {

                $role = new Role();
                $role->setId($roleData['id']);
                $role->setRoleName($roleData['role_name']);
                $roles[] = $role;
            }
        }
        return $roles;
    }
}