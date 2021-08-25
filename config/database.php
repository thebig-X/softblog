<?php

    return [

        'mysql' => [
            'driver' => 'mysql',
            'url' => 'DATABASE_URL',
            'host' =>  '127.0.0.1',
            'port' => '3306',
            'database' => 'forge',
            'username' => 'forge',
            'password' =>  '',
            'unix_socket' =>  '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => getenv('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => '127.0.0.1',
            'port' =>  '5432',
            'database' => 'softblog',
            'username' => 'postgres',
            'password' =>  'johnson10',
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ]
    ];