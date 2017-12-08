<?php

namespace App\Handlers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;

class UncaughtException
{
    private $view;
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function __invoke($request, $response, $exception)
    {
        switch(get_class($exception))
        {
            // Handle specific kinds of exceptions here.

            default:
                $this->logger->error($exception);
                return $this->view->render($response, '500.twig')
                    ->withStatus(500);
        }
    }
}
