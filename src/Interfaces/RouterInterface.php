<?php

namespace App\Interfaces;

interface RouterInterface
{
    public function state();
    public function internetConnection();
    public function deviceCableConnection();
    public function deviceWiFiConnection();
    public function getDeviceIp();
}