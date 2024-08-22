<?php

$routes = [
    '/goldfern/' => 'app/views/visit.php',
    '/goldfern/about' => 'app/views/about.php',
    '/goldfern/contact' => 'app/views/contact.php',
];

function handleRequest($routes) {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        require 'app/views/404.php'; // Custom 404 page
    }
}

handleRequest($routes);

?>