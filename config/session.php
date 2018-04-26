<?php

return [
    'settings.session' => [
        'lifetime' => '20 minutes',
        'name' => 'slim_session',
        'autorefresh' => true,
        'ini_settings' => [
            'session.save_path' => __DIR__.'/../storage/sessions',
        ],
    ],  
];