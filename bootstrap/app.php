<?php

session_start();

require 'autoload.php';

use Slim\Csrf\Guard;

use App\Handlers;

$app = new App\App;

$container = $app->getContainer();

$app->add($container->get(Guard::class));
// $app->add( new App\Midlware\ExampleMiddleware );

$app->get('/', Handlers\Welcome::class);

$app->post('/', Handlers\Hello::class);

return $app;
