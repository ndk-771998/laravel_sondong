<?php

return [
    'auth_middleware' => [
        'admin'   => [
            [
                'middleware' => 'jwt.auth',
                'except'     => [],
            ],
        ],
    ],
];
