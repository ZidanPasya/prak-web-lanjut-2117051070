<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/profile_url/(:any)/(:any)/(:any)/(:any)', 'Home::profile_url/$1/$2/$3/$4');
