<?php

use Slim\Views\Twig;
use Slim\Views\TwigExtension;

return function ($c) {
    $view = new Twig(__DIR__.'/../../app/Views', [
        'cache' => false,
    ]);
    
    $view->addExtension(new TwigExtension(
        $c->get('router'),
        $c->get('request')->getUri()
    ));

    return $view;
};
