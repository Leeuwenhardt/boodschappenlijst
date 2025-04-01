<?php

$routes = [
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
    http_response_code(404);

    require "views/404.php";

    echo "Sorry. Not found.";

    die();
}

routeToController($uri, $routes);
