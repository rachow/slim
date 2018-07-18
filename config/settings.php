<?php
/*
 *	@author: rachow
*/

$settings = [];

// Slim settings
$settings['displayErrorDetails'] = true; /* detailed errors */
$settings['determineRouteBeforeAppMiddleware'] = true;


//Configuring path settings

$settings['root'] = dirname( __DIR__ ) . '/../';
$settings['config'] = $settings['root'] . '/config';
$settings['core'] = $settings['root'] . '/core';
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';


// View settings for Twig
$settings['twig'] = [
    'path' => $settings['root'] . '/core/views',
    'cache_enabled' => false,
    'cache_path' =>  $settings['temp'] . '/twig-cache'
];

// Logging settings for monolog
$settings['logger'] = [
    'name' => 'app',
    'file' => $settings['temp'] . '/logs/' . date('Y-m') . '.log',
    'level' => \Monolog\Logger::ERROR,
];


//Load database settings
$settings['db'] = require $settings['config'] . '/db.php';

//Load the site configurations
$settings['site'] = require $settings['config'] . '/config.php';



