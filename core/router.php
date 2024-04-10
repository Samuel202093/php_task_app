<?php
$routes = require 'routes.php';

$uri = isset($_GET['route']) ? $_GET['route'] : '';



function abort($num){
    if($num === 404){
        require 'pages/error.php';
    }
    if ($num === 403) {
        require 'pages/403.php';
    }
};


function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) { 
     return  require  $routes[$uri]; // the require "../" is taking it to the folder where the file is located 
    }
        abort(404); 
}

// routeToController($uri, $routes->routes);
// routeToController($uri, $convertedToArray);
routeToController($uri, $routes);