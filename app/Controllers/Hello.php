<?php

namespace App\Controllers;

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
        $params = $request->getParsedBody();
        $this->logger->info("Saying hello to {$params['name']}");
        return $this->view->render($response, 'hello.twig', ['name' => $params['name']]);
    }
}
