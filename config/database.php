<?php 

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => getenv(),
            'host' => 'localhost',
            'port' => 3306,
            'database' => 'electron',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ]
    ]
];