<?php

namespace App\Providers;

use SlimSession\Helper as SessionHelper;

class SessionHelperProvider
{
	public function __invoke()
	{
		return new SessionHelper();
	}
}
