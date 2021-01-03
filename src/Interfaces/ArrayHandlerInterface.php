<?php


namespace App\Interfaces;


interface ArrayHandlerInterface
{
    public function arrayCount(array $array): int;

    public function inArray($needle, array $array): bool;

    public function keysArray(array $array): array;

    public function keyExist($key, array $array): bool;

    public function arrayValues(array $array): array;

}