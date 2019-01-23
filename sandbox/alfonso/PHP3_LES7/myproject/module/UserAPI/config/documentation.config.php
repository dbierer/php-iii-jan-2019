<?php
return [
    'UserAPI\\V1\\Rest\\User\\Controller' => [
        'description' => 'User Entity',
    ],
    'UserAPI\\V2\\Rest\\User\\Controller' => [
        'description' => 'user service description',
        'collection' => [
            'GET' => [
                'response' => '',
            ],
        ],
    ],
    'UserAPI\\V2\\Rest\\UserProfile\\Controller' => [
        'description' => 'user profile service description',
    ],
];
