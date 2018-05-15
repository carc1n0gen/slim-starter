<?php

namespace App\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Hello
{
    /**
     *  @var Twig
     */
    private $view;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function __invoke(Request $request, Response $response)
    {
        $params = $request->getParsedBody();
        $this->logger->info("Saying hello to {$params['name']}");
        return $this->view->render($response, 'hello.twig', ['name' => $params['name']]);
    }
}
