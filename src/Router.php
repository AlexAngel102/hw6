<?php

namespace App;

use App\Interfaces\RouterInterface;

class Router implements RouterInterface
{
    public function state()
    {
        echo 'Turned ON/OFF'.'<br>';
    }

    public function internetConnection()
    {
        echo 'Connected/Disconnected'.'<br>';
    }

    public function deviceCableConnection()
    {
        echo 'Device connected with cable'.'<br>';
    }

    public function deviceWiFiConnection()
    {
        echo 'Device connecte Wi-Fi'.'<br>';
    }

    public function getDeviceIp()
    {
        echo 'Device IP-adress: 0.0.0.0'.'<br>';
    }

}