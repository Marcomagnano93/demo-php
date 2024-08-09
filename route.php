<?php
$uri = $_SERVER['REQUEST_URI'];



// if ($uri === '/'){
//     require 'controllers/index.php';
// }
// elseif ($uri === '/exercise') {
//     require 'controllers/exercise.php';
// }

//router
$routes = [
    '/' => 'controllers/index.php',
    '/exercise' => 'controllers/exercise.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);

    require 'view/404.php';

    die();
}