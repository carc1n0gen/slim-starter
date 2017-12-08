<?php

namespace App\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use SlimSession\Helper as SessionHelper;

class Welcome
{
    private $view;
    private $logger;
    private $session;

    public function __construct(Twig $view, LoggerInterface $logger, SessionHelper $session)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->session = $session;
    }

    public function __invoke($request, $response)
    {
        $this->session->message = 'Slim Starter';
        $this->logger->info('Logged from the welcome page');
        return $this->view->render($response, 'welcome.twig');
    }
}
