<?php

namespace App\Model\Entity;

class Role {
    private ?int $id;
    private ?string $roleName;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * @param string|null $roleName
     */
    public function setRoleName(?string $roleName): void
    {
        $this->roleName = $roleName;
    }
}