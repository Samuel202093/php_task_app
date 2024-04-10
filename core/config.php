<?php 
    require_once __DIR__ . '/../vendor/autoload.php'; // autoloading the .env file through the composer vendor folder
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..'); //getting access to the .env file
    $dotenv->load();


    return [
        'database' => [
            'host' => $_ENV['DATABASE_HOSTNAME'], //using the php built-in method for .env to have access to the database credentials in .env file.
            'port' => $_ENV['DATABASE_PORT'],
            'dbname' => $_ENV['DATABASE_NAME']
        ]
    ];
