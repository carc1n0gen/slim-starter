<?php

use Slim\Middleware\Session;

return function ($c) {
    return new Session([
        'lifetime' => '20 minutes',
        'name' => 'slim_session',
        'autorefresh' => true
    ]);
};
