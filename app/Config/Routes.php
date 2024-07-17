<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//get
$routes->get('/', 'Board::main');
$routes->get('/board/list', 'Board::index');
$routes->get('/board/create', 'Board::create');
//post
$routes->post('/board/store', 'Board::store');