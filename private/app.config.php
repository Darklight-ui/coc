<?php

use Dotenv\Dotenv;

// load composer
require_once __DIR__ . '/../vendor/autoload.php';


// Detect environment (local vs live)
$host = $_SERVER['HTTP_HOST'] ?? 'cli';
if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
    $envFile = '.env.local';
} else {
    $envFile = '.env.live';
}

try {
    $dotenv = Dotenv::createImmutable(__DIR__, $envFile);
    $dotenv->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    die("Environment file not found: " . __DIR__ . '/' . $envFile . "\nError: " . $e->getMessage());
}

$dotenv = Dotenv::createImmutable(__DIR__, $envFile);
$dotenv->load();


return [
    'db' => [
        'host' => $_ENV['DB_HOST'] ?? 'localhost',
        'name' => $_ENV['DB_NAME'],
        'user' => $_ENV['DB_USER'],
        'pass' => $_ENV['DB_PASS']
    ],
];
