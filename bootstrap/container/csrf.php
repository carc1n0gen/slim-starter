<?php

use Slim\Csrf\Guard;

return function ($c) {
    return new Guard();
};
