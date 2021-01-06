<?php

namespace App;

class UserJsoneResponse
{
    public function __invoke(User $user): string
    {
        $this->getUserView($user);
    }

    protected function getUserView(User $user): string
    {
        echo json_encode($user);
    }
}