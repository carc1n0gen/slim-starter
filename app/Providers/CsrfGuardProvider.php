<?php

namespace App\Providers;

use Slim\Csrf\Guard as CsrfGuard;

class CsrfGuardProvider
{
	public function __invoke()
	{
		return new CsrfGuard();
	}
}
