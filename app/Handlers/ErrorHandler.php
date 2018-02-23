<?php

namespace App\Handlers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Container\ContainerInterface;

class ErrorHandler
{
    private $view;
    private $logger;
    private $displayErrorDetails;

    public function __construct(Twig $view, LoggerInterface $logger, ContainerInterface $container)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->displayErrorDetails = $container->get('settings.displayErrorDetails');
    }

    public function __invoke($request, $response, $exception)
    {
        switch(get_class($exception))
        {
            // Handle specific kinds of exceptions here.

            default:
                $this->logger->error($exception);
                return $this->view->render($response, '500.twig', [
                    'details' => $this->displayErrorDetails ? $exception->getTraceAsString() : null]
                )->withStatus(500);
        }
    }
}
