<?php

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;

use App\Handlers\ErrorHandler;

return function ($c) {
    return new ErrorHandler(
        $c->get(Twig::class),
        $c->get(LoggerInterface::class),
        $c->get('settings.displayErrorDetails')
    );
};
