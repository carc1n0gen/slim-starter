<?php

namespace App\Handlers;

use Slim\Views\Twig;

class NotFoundHandler
{
    private $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function __invoke($request, $response)
    {
        return $this->view->render($response, '404.twig')
            ->withStatus(404);
    }
}
