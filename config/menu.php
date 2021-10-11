<?php

return [
    'cache' => [
        'enabled' => true,
        'minutes' => 30,
    ],

    'auth_middleware' => [
        'admin' => [
            [
                'middleware' => 'jwt.auth',
                'except'     => [],
            ],
        ],
    ],
    'page' => [
        'header' => [
            'label' => 'header',
            'position' => [
                'position-1' => 'Menu chính',
            ],
        ],
        'footer' => [
            'label' => 'footer',
            'position' => [
                'position-1' => 'Menu chính',
            ],
        ],
    ],
];
