<?php

return [
	'settings.httpVersion' => '1.1',

	'settings.responseChunkSize' => 4096,

	'settings.outputBuffering' => 'append',

	'settings.determineRouteBeforeAppMiddleware' => false,

    'settings.displayErrorDetails' => false, // Set to true to see debug info (do not do this in production)

	'settings.addContentLengthHeader' => true,

	'settings.routerCacheFile' => false,
];
