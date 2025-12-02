<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver'                    => 'sqlite',
            'url'                       => env('DATABASE_URL'),
            'database'                  => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix'                    => '',
            'foreign_key_constraints'   => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql4' => [
            'driver'    => 'mysql',
            'host'      => 'gl-crm.cluster-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            'port'      => '3306',
            'database'  => 'lms_plus',
            'username'  => 'GLApplicationAlpha',
            'password'  => 'GLX1234YU980PIL',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ],

        'mysql_crm_report' => [
            'driver'    => 'mysql',
            'host'      => 'report-gl-crm-read-instance-1.cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            'port'              => env('DB_PORT', '3306'),
            'database'          => env('DB_DATABASE', 'forge'),
            'username'          => env('DB_USERNAME', 'forge'),
            'password'          => env('DB_PASSWORD', ''),
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'url'       => env('DATABASE_URL'),
            
            // 'read'      => [
            //     'host'  => [
            //         'gl-crm.cluster-ro-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            //     ],
            // ],
            // 'write'     => [
            //     'host'  => [
            //         'gl-crm.cluster-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            //     ],
            // ],

            'read'      => [
                'host'  => [
                    'auroraserverlesspoc.cluster-ro-clewcd20eitf.ap-south-1.rds.amazonaws.com',
                ],
            ],
            'write'     => [
                'host'  => [
                    'auroraserverlesspoc.cluster-clewcd20eitf.ap-south-1.rds.amazonaws.com',
                ],
            ],

            'port'              => env('DB_PORT', '3306'),
            'database'          => env('DB_DATABASE', 'forge'),
            'username'          => env('DB_USERNAME', 'forge'),
            'password'          => env('DB_PASSWORD', ''),
            'unix_socket'       => env('DB_SOCKET', ''),
            'charset'           => 'utf8mb4',
            'collation'         => 'utf8mb4_unicode_ci',
            'prefix'            => '',
            'prefix_indexes'    => true,
            'strict'            => false,
            'engine'            => null,
            'options'           => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'lms_plus_read' => [
            'driver'            => 'mysql',
            'url'               => env('DATABASE_URL'),
            'host'              => 'gl-crm.cluster-ro-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            'port'              => env('DB_PORT', '3306'),
            'database'          => env('DB_DATABASE', 'forge'),
            'username'          => env('DB_USERNAME', 'forge'),
            'password'          => env('DB_PASSWORD', ''),
            'unix_socket'       => env('DB_SOCKET', ''),
            'charset'           => 'utf8mb4',
            'collation'         => 'utf8mb4_unicode_ci',
            'prefix'            => '',
            'prefix_indexes'    => true,
            'strict'            => false,
            'engine'            => null,
            'options'           => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'lms_plus_write' => [
            'driver'            => 'mysql',
            'url'               => env('DATABASE_URL'),
            'host'              => 'gl-crm.cluster-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            'port'              => env('DB_PORT', '3306'),
            'database'          => env('DB_DATABASE', 'forge'),
            'username'          => env('DB_USERNAME', 'forge'),
            'password'          => env('DB_PASSWORD', ''),
            'unix_socket'       => env('DB_SOCKET', ''),
            'charset'           => 'utf8mb4',
            'collation'         => 'utf8mb4_unicode_ci',
            'prefix'            => '',
            'prefix_indexes'    => true,
            'strict'            => false,
            'engine'            => null,
            'options'           => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'ivrs_crm' => [
            'driver'    => 'mysql',
            'host'      => '180.211.97.188',
            'port'      => '3306',
            'database'  => 'asterisk_ivrs',
            'username'  => 'root',
            'password'  => 'Robust@Landmark#Rv',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ],

        'mysql_lis_plus_2_0' => [
            'driver'    => 'mysql',
            'host'      => 'gl-erp.cluster-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            'port'      => '3306',
            'database'  => 'lis_plus_2_0',
            'username'  => 'admin',
            'password'  => 'erpGL1337',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ],

        'mysql_ldp_cdb' => [
            'driver'    => 'mysql',
            'host'      => 'gl-erp.cluster-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            'port'      => '3306',
            'database'  => 'ldp_cdb',
            'username'  => 'admin',
            'password'  => 'erpGL1337',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ],

        'mysql_lmg_services' => [
            'driver'    => 'mysql',
            'host'      => 'gl-erp.cluster-cm8igi75rhae.ap-south-1.rds.amazonaws.com',
            'port'      => '3306',
            'database'  => 'lmg_services',
            'username'  => 'admin',
            'password'  => 'erpGL1337',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ],

        'pgsql' => [
            'driver'            => 'pgsql',
            'url'               => env('DATABASE_URL'),
            'host'              => env('PG_DB_HOST', '127.0.0.1'),  
            'port'              => env('PG_DB_PORT', '5432'), 
            'database'          => env('PG_DB_DATABASE', 'forge'),  
            'username'          => env('PG_DB_USERNAME', 'forge'),  
            'password'          => env('PG_DB_PASSWORD', ''),  
            'charset'           => 'utf8',
            'prefix'            => '',
            'prefix_indexes'    => true,
            'search_path'       => 'public',
            'sslmode'           => 'prefer',
        ],

        'sqlsrv' => [
            'driver'            => 'sqlsrv',
            'url'               => env('DATABASE_URL'),
            'host'              => env('DB_HOST', 'localhost'),
            'port'              => env('DB_PORT', '1433'),
            'database'          => env('DB_DATABASE', 'forge'),
            'username'          => env('DB_USERNAME', 'forge'),
            'password'          => env('DB_PASSWORD', ''),
            'charset'           => 'utf8',
            'prefix'            => '',
            'prefix_indexes'    => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
