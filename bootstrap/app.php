<?php

require 'autoload.php';

use Slim\Middleware\Session;
use Slim\Csrf\Guard as CsrfGuard;

use App\Handlers;

$app = new App\App;
$container = $app->getContainer();

$app->add($container->get(CsrfGuard::class));
$app->add($container->get(Session::class));

$app->get('/', Handlers\Welcome::class);

$app->post('/', Handlers\Hello::class);

return $app;
