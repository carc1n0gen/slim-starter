<?php

use Slim\Views\Twig;

use App\Handlers\NotFound;

return function ($c) {
    return new NotFound($c->get(Twig::class));
};
