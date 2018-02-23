<?php

use Slim\Csrf\Guard;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use SlimSession\Helper as SessionHelper;

use App\Twig\CsrfExtension;
use App\Twig\SessionExtension;

return function ($c) {
    $config = $c->get('settings.views');
    
    $view = new Twig(__DIR__.'/../../app/Views', [
        'cache' => $config['cachePath']
    ]);
    
    $view->addExtension(new TwigExtension(
        $c->get('router'),
        $c->get('request')->getUri()
    ));

    $view->addExtension(new CsrfExtension(
        $c->get(Guard::class)
    ));

    $view->addExtension(new SessionExtension(
        $c->get(SessionHelper::class)
    ));

    return $view;
};
