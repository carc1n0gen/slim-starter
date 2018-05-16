<?php

namespace App\Providers;

use SlimSession\Helper as SessionHelper;

class SessionHelperProvider
{
	public function create()
	{
		return new SessionHelper();
	}
}
