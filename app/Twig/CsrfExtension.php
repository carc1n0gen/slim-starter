<?php

namespace App\Twig;

use Slim\Csrf\Guard;
use Twig\Extension\GlobalsInterface;
use Twig\Extension\AbstractExtension;

class CsrfExtension extends AbstractExtension implements GlobalsInterface
{
    private $csrf;

    public function __construct(Guard $csrf)
    {
        $this->csrf = $csrf;
    }

    public function getGlobals()
    {
        $csrfNameKey = $this->csrf->getTokenNameKey();
        $csrfValueKey = $this->csrf->getTokenValueKey();
        $csrfName = $this->csrf->getTokenName();
        $csrfValue = $this->csrf->getTokenValue();

        return [
            'csrf' => [
                'keys' => [
                    'name'  => $csrfNameKey,
                    'value' => $csrfValueKey
                ],
                'name'  => $csrfName,
                'value' => $csrfValue
            ]
        ];
    }

    public function getName()
    {
        return 'slim/csrf';
    }
}
