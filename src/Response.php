<?php

namespace App;

use App\Interfaces\UserResponse;

class Response
{
    public function get(UserResponse $response): void
    {
        echo $response->getUserView();
    }
}