<?php
    return [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => getenv('DATABASE_URL'),
            'database' => getenv('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => getenv('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => getenv('DATABASE_URL'),
            'host' => getenv('DB_HOST', '127.0.0.1'),
            'port' => getenv('DB_PORT', '3306'),
            'database' => getenv('DB_DATABASE', 'forge'),
            'username' => getenv('DB_USERNAME', 'forge'),
            'password' => getenv('DB_PASSWORD', ''),
            'unix_socket' => getenv('DB_SOCKET', ''),
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
            'url' => getenv('DATABASE_URL'),
            'host' => getenv('DB_HOST', '127.0.0.1'),
            'port' => getenv('DB_PORT', '5432'),
            'database' => getenv('DB_DATABASE', 'forge'),
            'username' => getenv('DB_USERNAME', 'forge'),
            'password' => getenv('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ]
    ];