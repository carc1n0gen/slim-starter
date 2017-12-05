<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

return function ($c) {
    $log = new Logger('app');
    $log->pushHandler(new StreamHandler(__DIR__.'/../../storage/logs/app.log'));

    return $log;
};
