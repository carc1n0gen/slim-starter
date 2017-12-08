<?php

namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use SlimSession\Helper as SessionHelper;

class SessionExtension extends AbstractExtension
{
    private $session;
    public function __construct(SessionHelper $session)
    {
        $this->session = $session;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('session', [$this, 'getSessionVal'])
        ];
    }

    public function getSessionVal($key)
    {
        return $this->session[$key];
    }

    public function getName()
    {
        return 'slim/session';
    }
}
