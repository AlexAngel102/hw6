<?php


namespace App\Interfaces\;


interface ArrayHandlerInterface
{
    public function arrayCount();
    public function inArray();
    public function keysArray();
    public function keyExist();
    public function firstKey();

}