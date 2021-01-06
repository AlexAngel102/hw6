<?php

namespace App\Interfaces;

use App\User;

abstract class UserResponse
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    abstract public function getUserView(): string;
}