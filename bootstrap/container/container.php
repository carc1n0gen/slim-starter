<?php

use Slim\Views\Twig;
use Slim\Csrf\Guard;
use Psr\Log\LoggerInterface;

return [
    Guard::class => require 'csrf.php',
    Twig::class => require 'view.php',
    LoggerInterface::class => require 'logger.php',
];
