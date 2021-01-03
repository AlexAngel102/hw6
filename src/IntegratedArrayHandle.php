<?php

namespace App;

use App\Interfaces\ArrayHandlerInterface;

class IntegratedArrayHandle implements ArrayHandlerInterface
{

    public function arrayCount(array $array): int
    {
        return count($array);
    }

    public function inArray($needle, array $array): bool
    {
        return in_array($needle, $array);
    }

    public function keysArray(array $array): array
    {
        return array_keys($array);
    }

    public function keyExist($key, array $array): bool
    {
        return array_key_exists($key, $array);
    }

    public function arrayValues(array $array): array
    {
        return array_values($array);
    }
}