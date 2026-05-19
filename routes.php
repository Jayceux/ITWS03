<?php

// return [ 
//         '/' => 'controllers/home.php',
//         '/listings' => 'controllers/listings/index.php',
//         'listings/create' => 'controllers/listings/create.php',
//         '404' => 'controllers/error/404.php'
//     ];

$router->get('/', 'controllers/home.php'); //define a GET route for the home page
$router->get('/listings', 'controllers/listings/index.php'); //define a GET route for the listings page
$router->get('/listings/create', 'controllers/listings/create.php'); //define a GET route for the create listing page
// if you want to create a new listing, you would typically use a POST request to submit the form data to the server. So you would define a POST route for the create listing page like this:
$router->get('/listing', 'controllers/listings/show.php'); //define a GET route for the show listing page
