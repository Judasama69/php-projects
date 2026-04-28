<?php

require 'functions.php';

// /laracast is the project folder (e.g. http://localhost/laracast)
$uri = currentPath();
$basePath = '/laracast';
$path = str_starts_with($uri, $basePath) ? substr($uri, strlen($basePath)) : $uri;
$path = $path === '' ? '/' : $path;

if ($path === '/' || $path === '/index' || $path === '/home') {
    require 'controllers/home.php';
} else if ($path === '/about') {
    require 'controllers/about.php';
} else if ($path === '/contact') {
    require 'controllers/contact.php';
} else if ($path === '/project') {
    require 'controllers/project.php';
} else {
    http_response_code(404);
    require 'views/404.view.php';
}
