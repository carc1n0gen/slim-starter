<?php

namespace App;

use \DI\ContainerBuilder;
use \DI\Bridge\Slim\App as DIApp;


class App extends DIApp
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__.'/../config/app.php');
        $builder->addDefinitions(__DIR__.'/../config/logger.php');
        $builder->addDefinitions(__DIR__.'/../bootstrap/container/container.php');
    }
}
