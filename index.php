<?php

use App\IntegratedArrayHandle;
use App\ManualArrayHandle;
use App\Router;
use App\User;
use App\UserTemplateResponse;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoload.php';

$autoloader = new Psr4AutoloaderClass();
$autoloader->addNamespace('App', __DIR__ . '/src');
$autoloader->register();

//$router = new Router();
//$router->state();
//$router->internetConnection();
//$router->deviceCableConnection();
//$router->deviceWiFiConnection();
//$router->getDeviceIp();
//
//echo '<br>';

$someArray = [
    'fruit1' => 'Apple',
    'fruit2' => 'Banana',
    'alcohol1' => 'Beer',
    'fruit3' => 'Pineapple',
    'alcohol2' => 'Vodka',
    'alcohol3' => 'Cognak',
    'alcohol4' => 'Rum',
    'alcohol5' => 'Tequila',
    'fruit4' => 'Orange',
    'fruit5' => 'Mandorin'
];

//$integratedArrayFunctions = new IntegratedArrayHandle();

//echo $integratedArrayFunctions->arrayCount($someArray);
//echo '<br>';
//print_r($integratedArrayFunctions->arrayValues($someArray));
//echo '<br>';
//var_dump($integratedArrayFunctions->inArray('Beer',$someArray));
//echo '<br>';
//var_dump($integratedArrayFunctions->inArray('Sigarets',$someArray));
//echo '<br>';
//var_dump($integratedArrayFunctions->keyExist('Fruit',$someArray));
//echo '<br>';
//var_dump($integratedArrayFunctions->keyExist('fruit1',$someArray));
//echo '<br>';
//print_r($integratedArrayFunctions->keysArray($someArray));

//$manualArrayFunctions = new ManualArrayHandle();

//echo $manualArrayFunctions->arrayCount($someArray);
//echo '<br>';
//var_dump($manualArrayFunctions->inArray('Orange',$someArray));
//echo '<br>';
//var_dump($manualArrayFunctions->inArray('Sigarets',$someArray));
//echo '<br>';
//print_r($manualArrayFunctions->keysArray($someArray));
//echo '<br>';
//var_dump($manualArrayFunctions->keyExist('Fruit',$someArray));
//echo '<br>';
//var_dump($manualArrayFunctions->keyExist('fruit1',$someArray));
//echo '<br>';
//print_r($manualArrayFunctions->arrayValues($someArray));

$user = new User('Aleksand', 'alex@gmail.com', 'Qwerty12345', 'Ukrain, Odessa');
$userTemplateResponse = new userTemplateResponse();
$userTemplateResponse($user);