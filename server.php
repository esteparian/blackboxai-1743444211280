<?php
// Simple PHP development server router
$request = $_SERVER['REQUEST_URI'];
$filePath = __DIR__ . $request;

// Default to index.html if root is requested
if ($request === '/') {
    include __DIR__ . '/index.html';
    exit;
}

// Check if requested file exists
if (file_exists($filePath) && is_file($filePath)) {
    $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    
    // Serve HTML/PHP files directly
    if (in_array($ext, ['html', 'php'])) {
        include $filePath;
        exit;
    }
    
    // Serve other files with appropriate headers
    if ($ext === 'css') {
        header('Content-Type: text/css');
    } elseif ($ext === 'js') {
        header('Content-Type: application/javascript');
    }
    readfile($filePath);
    exit;
}

// 404 Not Found
http_response_code(404);
include __DIR__ . '/404.html';
?>