<?php

use Slim\Views\Twig;
use Slim\Csrf\Guard;
use Slim\Middleware\Session;
use Psr\Log\LoggerInterface;
use SlimSession\Helper as SessionHelper;

return [
    'errorHandler' => require 'errorHandler.php',
    'notFoundHandler' => require 'notFound.php',
    Session::class => require 'sessionMiddleware.php',
    SessionHelper::class => require 'session.php',
    Guard::class => require 'csrf.php',
    Twig::class => require 'view.php',
    LoggerInterface::class => require 'logger.php',
];
