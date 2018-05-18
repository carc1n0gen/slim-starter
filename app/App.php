<?php

namespace App;

use DI;
use App\Providers;
use Slim\Views\Twig;
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
            'notFoundHandler' => DI\factory(Providers\NotFoundProvider::class),
            'errorHandler' => DI\factory(Providers\ErrorHandlerProvider::class),
            CsrfGuard::class => DI\factory(Providers\CsrfGuardProvider::class),
		    SessionMiddleware::class => DI\factory(Providers\SessionMiddlewareProvider::class),
            SessionHelper::class => DI\factory(Providers\SessionHelperProvider::class),
		    Twig::class => DI\factory(Providers\TwigProvider::class),
		    LoggerInterface::class => DI\factory(Providers\LoggerProvider::class),
        ]);
    }
}
