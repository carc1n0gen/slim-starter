<?php

namespace App\Handlers;

use Exception;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ErrorHandler
{
    /**
     * @var Twig
     */
    private $view;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var bool
     */
    private $displayErrorDetails;

    public function __construct(Twig $view, LoggerInterface $logger, $displayErrorDetails=false)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->displayErrorDetails = $displayErrorDetails;
    }

    public function __invoke(Request $request, Response $response, Exception $exception)
    {
        switch(get_class($exception))
        {
            // Handle specific kinds of exceptions here.

            default:
                $this->logger->error($exception);
                return $this->view->render($response, '500.twig', [
                    'details' => $this->displayErrorDetails === true ? $exception->getTraceAsString() : null
                ])->withStatus(500);
        }
    }
}
