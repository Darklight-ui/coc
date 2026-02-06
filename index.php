<?php

require_once __DIR__ . '/config/bootstrap.php';

$request = str_replace(rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/', '', $_SERVER['REQUEST_URI']);
$request = strtok($request, '?'); // Remove query string
$request = trim($request, '/');

/**
 * if you ever have a POST route, it comes here first 
 */

$pagesDir = __DIR__ . '/pages/';
/**
 * Security
 */
if(!preg_match('/^[a-zA-Z0-9\-\/]*$/', $request)) {
    include $pagesDir . '404.php';
    exit;
}

/**
 * Homepage
 */
if ($request === '' || $request === 'index') {
    include $pagesDir . 'home/index.php';
    exit;
}

/**
 * Page routing
 */
$filePath = $pagesDir . $request;
if(file_exists($filePath . '.php')) {
    $viewFile = $filePath . '.php';
} elseif (file_exists($filePath . '/index.php')) {
    $viewFile = $filePath . '/index.php';

} else {
    include $pagesDir . '404.php';
    exit;
}

// Render the requested page
include $viewFile; 
