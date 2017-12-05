<?php

return [
	'settings.httpVersion' => getenv('SLIM_HTTP_VERSION') ?: '1.1',

	'settings.responseChunkSize' => getenv('SLIM_RESPONSE_CHUNK_SIZE') ?: 4096,

	'settings.outputBuffering' => getenv('SLIM_OUTPUT_BUFFERING') ?: 'append',

	'settings.determineRouteBeforeAppMiddleware' => getenv('SLIM_DETERMINE_ROUTE_BEFORE_APP_MIDDLEWARE') === 'true' ? true : false,

    'settings.displayErrorDetails' => true, // getenv('SLIM_DISPLAY_ERROR_DETAILS') === 'true' ? true : false,

	'settings.addContentLengthHeader' => getenv('SLIM_ADD_CONTENT_LENGTH_HEADER') === 'false' ? false : true,

	'settings.routerCacheFile' => getenv('SLIM_ROUTER_CACHE') ?:false,
];
