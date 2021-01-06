<?php

namespace App;

class UserJsoneResponse
{
    public function __invoke(User $user)
    {
        $this->getUserView($user);
    }

    protected function getUserView(User $user):string
    {
        return json_encode($user);
    }
}