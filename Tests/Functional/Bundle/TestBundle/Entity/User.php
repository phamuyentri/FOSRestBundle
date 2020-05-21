<?php

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    const ROLE_DEFAULT = 'ROLE_USER';

    public $username;
    public $roles = [];

    public function getRoles(): array
    {
        $roles = $this->roles;

        $roles[] = static::ROLE_DEFAULT;

        return array_unique($roles);
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return '';
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials(): void
    {
    }
}
