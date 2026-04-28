<?php

function dd($value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function currentPath(): string
{
    return parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
}

function urlIs(string $value): bool
{
    return currentPath() === $value;
}
