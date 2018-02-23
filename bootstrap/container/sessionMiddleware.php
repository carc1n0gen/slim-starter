<?php

use Slim\Middleware\Session;

return function ($c) {
    $config = $c->get('settings.session');
    return new Session($config);
};
