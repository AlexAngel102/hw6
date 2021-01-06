<?php

namespace App;

use App\Interfaces\UserResponse;

class UserJsonResponse extends UserResponse
{
    public function getUserView(): string
    {
        $data = [
            'name' => $this->user->getName(),
            'email' => $this->user->getEmail(),
            'password' => $this->user->getPassword(),
            'adress' => $this->user->getAdress()

        ];
        return json_encode($data);
    }
}