<?php

define('APP_ROOT', __DIR__);

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'determineRouteBeforeAppMiddleware' => false,

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        'doctrine' => [
            // if true, metadata caching is forcefully disabled
            'dev_mode' => true,

            // path where the compiled metadata info will be cached
            // make sure the path exists and it is writable
            'cache_dir' => APP_ROOT . '/var/doctrine',

            // you should add any other path containing annotated entity classes
            'metadata_dirs' => [APP_ROOT . '/src/core/Domain/Entity', APP_ROOT . '/src/core/Domain/ValueObject'],
            'path_dirs' => __DIR__ . '/core/Infrastructure/Persistence/Doctrine/Mapping',
            'prefix_namespace' => 'Core\Domain',
            'extension_file' => '.orm.yml',
            //'host' => '127.0.0.1',
            //'host' => 'mysql,
            'connection' => [
                'driver' => 'pdo_mysql',
                'host' => 'mysql',
                'port' => 3306,
                'dbname' => 'cineapp_local',
                'user' => 'root',
                'password' => '1234',
                'charset' => 'UTF8'
            ]
        ]
    ],
];
