<?php
return [
    // 默认为 PDO::FETCH_BOTH
    'fetch' => PDO::FETCH_CLASS,
    'default' => 'default',
    'connections' => [
        'default' => [
            'driver' => 'mysql',
            'read' => [
                'host' => env('DB_HOST', '121.40.199.207'),
            ],
            'write' => [
                'host' => env('DB_HOST', '121.40.199.207'),
            ],
            'database' => env('DB_DATABASE', 'bileji'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'port' => env('DB_PORT', 3306),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => ''
        ],
    ],

    'redis' => [
        'cluster' => false,
        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'port' => env('REDIS_PORT', 6379),
            'timeout' => 10,
            'database' => 0,
            'password' => env('REDIS_PASSWORD', ''),
        ],
    ]
];