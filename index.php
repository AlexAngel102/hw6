<?php

use App\IntegratedArrayHandle;
use App\ManualArrayHandle;
use App\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoload.php';

$autoloader = new Psr4AutoloaderClass();
$autoloader->addNamespace('App', __DIR__ . '/src');
$autoloader->register();

$router = new Router();
$router->state();
$router->internetConnection();
$router->deviceCableConnection();
$router->deviceWiFiConnection();
$router->getDeviceIp();

echo '<br>';

$integratedArrayFunctions = new IntegratedArrayHandle();
$manualArrayFunctions = new ManualArrayHandle();