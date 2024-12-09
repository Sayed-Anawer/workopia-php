<?php
require '../helpers.php';
// loadView("home");


$routes = [
    '/' => 'controllers/home.php',
    '/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

// inspectAndDie($uri);

if (array_key_exists($uri, $routes)) {
    // inspect(basePath($routes[$uri]));
    require(basePath($routes[$uri]));
} else {
    // inspect(basePath($routes[$uri]));
    require(basePath($routes['404']));
}
