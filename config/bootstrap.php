<?php
/*
 * 	@author: rachow
 */

//composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App(['settings' => require __DIR__ . '/../config/settings.php']);

// Setup the dependencies
require __DIR__ . '/../core/container.php';

// Register the middlewares
require __DIR__ . '/../core/middleware.php';

// Register the app routes
require __DIR__ . '/../core/routes.php';

return $app;

