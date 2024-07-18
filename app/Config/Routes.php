<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/post/create', 'PostController::create');
$routes->post('/post/store', 'PostController::store');

$routes->get('/user/signup', 'UserController::signup');
$routes->post('/user/store', 'UserController::store');
