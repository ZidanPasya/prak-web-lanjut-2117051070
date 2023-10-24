<?php

use App\Controllers\Home;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/profile_url/(:any)/(:any)/(:any)/(:any)', [Home::class, 'profile_url']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);