<?php

require 'autoload.php';

use Slim\Middleware\Session;
use Slim\Csrf\Guard as CsrfGuard;

use App\Controllers;

$app = new App\App;
$container = $app->getContainer();

$app->add($container->get(CsrfGuard::class));
$app->add($container->get(Session::class));

$app->get('/', Controllers\Welcome::class);
$app->post('/', Controllers\Hello::class);

return $app;
