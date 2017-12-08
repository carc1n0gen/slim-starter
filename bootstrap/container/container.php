<?php

use Slim\Views\Twig;
use Slim\Csrf\Guard;
use Psr\Log\LoggerInterface;
use SlimSession\Helper as SessionHelper;
use Slim\Middleware\Session as SessionMiddleware;

return [
    'errorHandler' => require 'errorHandler.php',
    'notFoundHandler' => require 'notFoundHandler.php',
    SessionMiddleware::class => require 'sessionMiddleware.php',
    SessionHelper::class => require 'session.php',
    Guard::class => require 'csrf.php',
    Twig::class => require 'view.php',
    LoggerInterface::class => require 'logger.php',
];
