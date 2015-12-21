<?php

namespace Rofil\Security\Entity\Eloquent;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function get($id)
    {
        return $this->user->find($id);
    }
}