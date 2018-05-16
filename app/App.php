<?php

namespace App;

use App\Providers;
use Slim\Views\Twig;
use function DI\factory;
use DI\ContainerBuilder;
use Psr\Log\LoggerInterface;
use DI\Bridge\Slim\App as DIApp;
use Slim\Csrf\Guard as CsrfGuard;
use SlimSession\Helper as SessionHelper;
use Slim\Middleware\Session as SessionMiddleware;

class App extends DIApp
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__.'/../config.php');
        $builder->addDefinitions([
            'notFoundHandler' => factory([Providers\NotFoundProvider::class, 'create']),
            'errorHandler' => factory([Providers\ErrorHandlerProvider::class, 'create']),
            CsrfGuard::class => factory([Providers\CsrfGuardProvider::class, 'create']),
		    SessionMiddleware::class => factory([Providers\SessionMiddlewareProvider::class, 'create']),
            SessionHelper::class => factory([Providers\SessionHelperProvider::class, 'create']),
		    Twig::class => factory([Providers\TwigProvider::class, 'create']),
		    LoggerInterface::class => factory([Providers\LoggerProvider::class, 'create']),
        ]);
    }
}
