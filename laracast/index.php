<?php

require 'functions.php';


$basePath = '/laracast';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'] ?? '/';

// If this project is hosted in a subfolder, strip it from the URI for routing.
if ($basePath !== '' && str_starts_with($uri, $basePath)) {
    $uri = substr($uri, strlen($basePath)) ?: '/';
}

// Default route
if ($uri === '/') {
    $uri = '/home';
}

$routes = [
    '/home' => 'controllers/home.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
    '/project' => 'controllers/project.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
    exit();
}

http_response_code(404);
require 'views/404.view.php';
