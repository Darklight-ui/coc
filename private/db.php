<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$config = require __DIR__ . '/config-loader.php';

try {
    $pdo = new PDO(
        "mysql:host={$config['db']['host']}; dbname={$config['db']['name']}; charset=utf8mb4",
        $config['db']['user'],
        $config['db']['pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}