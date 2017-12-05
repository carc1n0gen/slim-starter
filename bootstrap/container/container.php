<?php

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;

return [
    Twig::class => require 'view.php',
    LoggerInterface::class => require 'logger.php',
];
