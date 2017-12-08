<?php

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;

use App\Handlers\UnCaughtException;

return function ($c) {
    $view = $c->get(Twig::class);
    $logger = $c->get(LoggerInterface::class);
    return new UnCaughtException($view, $logger);
};
