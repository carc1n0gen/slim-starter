<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

return function ($c) {
    $config = $c->get('settings.logger');

    $logger = new Logger('app');
    $logger->pushHandler(new StreamHandler(
        $config['file'],
        Logger::toMonologLevel($config['level'])
    ));
    $logger->pushHandler(new StreamHandler(
        'php://stdout',
        Logger::toMonologLevel($config['level'])
    ));

    return $logger;
};
