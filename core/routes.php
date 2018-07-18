<?php
/*
 * 	@author: rachow
*/

use Slim\Http\Request;
use Slim\Http\Response;


/* Loading all the routes defined */

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("It works! This is the default welcome page.");

    return $response;
})->setName('root');


$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/home', function (Request $request, Response $response) {
    $viewData = [
        'now' => date('Y-m-d H:i:s')
    ];

    return $this->get('view')->render($response, 'home.twig', $viewData);
})->setName('home');


