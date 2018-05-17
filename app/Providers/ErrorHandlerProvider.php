<?php

namespace App\Providers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use App\Handlers\ErrorHandler;
use Psr\Container\ContainerInterface;

class ErrorHandlerProvider
{
	public function __invoke(ContainerInterface $c)
	{
		return new ErrorHandler(
	        $c->get(Twig::class),
	        $c->get(LoggerInterface::class),
	        $c->get('settings.displayErrorDetails')
	    );
	}
}
