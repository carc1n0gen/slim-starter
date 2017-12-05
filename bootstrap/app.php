<?php

require 'autoload.php';

use App\Handlers;

$app = new App\App;

// $app->add( new App\Midlware\ExampleMiddleware );

$app->get('/', Handlers\Hello::class);

return $app;
