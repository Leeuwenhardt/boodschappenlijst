<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'index.php',
    '/overzicht' => 'controllers.index.php',
    '/toevoegen' => 'controllers.create.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort() {
    http_response_code();

    require "views/404.php";

    die();
}

routeToController($uri, $routes);
