<?php 
    ini_set('display_errors', 1); //enable error reporting
    error_reporting(E_ALL);

    require '../helpers.php'; //require the helpers file which contains the basePath and loadView functions
    require basePath('Router.php'); //require the router class
    require basePath('Database.php'); //require the database class
    // $config = require basePath('config/db.php'); //require the database configuration file which returns an array of database configurationuration
    // $db = new Database($config); //create an instance of the database class with the database configuration as a parameter

    $router = new Router(); //create an instance of the router class

    $routes = require basePath('routes.php'); //require the routes file which returns an array of routes

    $uri = $_SERVER['REQUEST_URI'];//uniform resource identifier
    
    $method = $_SERVER['REQUEST_METHOD'];//get, post, put, delete

    $router->route($uri, $method); //call the route method of the router class with the uri and method as parameters
?>


