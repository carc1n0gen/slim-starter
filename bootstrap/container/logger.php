<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

return function ($c) {
    $level = $c->get('settings.logger.logLevel');

    $logger = new Logger('app');
    $logger->pushHandler(new StreamHandler(
        __DIR__.'/../../storage/logs/app.log',
        Logger::toMonologLevel($level)
    ));

    return $logger;
};
