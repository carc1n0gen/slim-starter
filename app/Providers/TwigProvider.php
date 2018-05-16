<?php

namespace App\Providers;

use Slim\Csrf\Guard;
use Slim\Views\Twig;
use App\Twig\CsrfExtension;
use Slim\Views\TwigExtension;
use App\Twig\SessionExtension;
use Psr\Container\ContainerInterface;
use SlimSession\Helper as SessionHelper;

class TwigProvider
{
	public function create(ContainerInterface $c)
	{
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
	}
}
