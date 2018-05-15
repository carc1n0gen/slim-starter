<?php

namespace App\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use SlimSession\Helper as SessionHelper;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Welcome
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
     * @var SessionHelper
     */
    private $session;

    public function __construct(Twig $view, LoggerInterface $logger, SessionHelper $session)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->session = $session;
    }

    public function __invoke(Request $request, Response $response)
    {
        $this->session->message = 'Slim Starter';
        $this->logger->info('Logged from the welcome page');
        return $this->view->render($response, 'welcome.twig');
    }
}
