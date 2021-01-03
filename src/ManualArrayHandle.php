<?php

namespace App;

use App\Interfaces\ArrayHandlerInterface;

class ManualArrayHandle implements ArrayHandlerInterface
{
    public function arrayCount(array $array): int
    {
        $i = 0;
        foreach ($array as $value) {
            $i++;
        }
        return $i;
    }

    public function inArray($needle, array $array): bool
    {
        foreach ($array as $item) {
            if ($item == $needle) {
                $result = true;
                break;
            } else {
                $result = false;
            }
        }
        return $result;
    }

    public function keysArray(array $array): array
    {
        foreach ($array as $key => $value){
            $keys[] = $key;
        }
        return $keys;
    }

    public function keyExist($index, array $array): bool
    {
        foreach ($array as $key => $value){
            if ($key == $index){
                $result = true;
                break;
            }else{
                $result = false;
            }
        }
        return $result;
    }

    public function arrayValues(array $array): array
    {
        foreach ($array as $value){
            $values[] = $value;
        }
        return $values;
    }

}