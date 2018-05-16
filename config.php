<?php

return [
	// Core
	'settings.httpVersion' => '1.1',
	'settings.responseChunkSize' => 4096,
	'settings.outputBuffering' => 'append',
	'settings.determineRouteBeforeAppMiddleware' => false,
    'settings.displayErrorDetails' => false, // Set to true to see debug info (do not do this in production)
	'settings.addContentLengthHeader' => true,
	'settings.routerCacheFile' => false,

	// Session
	'settings.session' => [
        'lifetime' => '20 minutes',
        'name' => 'slim_session',
        'autorefresh' => true,
        'ini_settings' => [
            'session.save_path' => __DIR__.'/storage/sessions',
        ],
    ],

    // Logger
    'settings.logger' => [
        'level' => 'info',
        'file' => __DIR__.'/storage/logs/app.log',
    ],

    // Views
    'settings.views' => [
        'cachePath' => __DIR__.'/storage/cache/views' // Change to false to disable caching
    ],
];
