<?php

namespace App\Providers;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Container\ContainerInterface;

class LoggerProvider
{
	public function __invoke(ContainerInterface $c)
	{
		$config = $c->get('settings.logger');

	    $logger = new Logger('app');
	    $logger->pushHandler(new StreamHandler(
	        $config['file'],
	        Logger::toMonologLevel($config['level'])
	    ));
	    $logger->pushHandler(new StreamHandler(
	        'php://stdout',
	        Logger::toMonologLevel($config['level'])
	    ));

	    return $logger;
	}
}
