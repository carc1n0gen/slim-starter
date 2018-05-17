<?php

namespace App\Providers;

use Psr\Container\ContainerInterface;
use Slim\Middleware\Session as SessionMiddleware;

class SessionMiddlewareProvider
{
	public function __invoke(ContainerInterface $c)
	{
    	return new SessionMiddleware($c->get('settings.session'));
	}
}
