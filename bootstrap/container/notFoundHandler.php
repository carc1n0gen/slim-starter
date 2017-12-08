<?php

use Slim\Views\Twig;

use App\Handlers\NotFoundHandler;

return function ($c) {
    return new NotFoundHandler($c->get(Twig::class));
};
