<?php

use Slim\Csrf\Guard;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use App\CsrfExtension;

return function ($c) {
    $view = new Twig(__DIR__.'/../../app/Views', [
        'cache' => false,
    ]);
    
    $view->addExtension(new TwigExtension(
        $c->get('router'),
        $c->get('request')->getUri()
    ));

    $view->addExtension(new CsrfExtension(
        $c->get(Guard::class)
    ));

    return $view;
};
