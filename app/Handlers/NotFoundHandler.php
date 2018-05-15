<?php

namespace App\Handlers;

use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class NotFoundHandler
{
    /**
     * @var Twig
     */
    private $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response)
    {
        return $this->view->render($response, '404.twig')->withStatus(404);
    }
}
