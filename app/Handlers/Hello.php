<?php

namespace App\Handlers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;

class Hello
{
    private $view;
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function __invoke($request, $response)
    {
        $this->logger->info('Just saying hi!');
        return $this->view->render($response, 'hello.twig');
    }
}
