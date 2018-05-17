<?php

namespace App\Providers;

use Slim\Views\Twig;
use App\Handlers\NotFoundHandler;
use Psr\Container\ContainerInterface;

class NotFoundProvider
{
	public function __invoke(ContainerInterface $c)
	{
		return new NotFoundHandler($c->get(Twig::class));
	}
}
