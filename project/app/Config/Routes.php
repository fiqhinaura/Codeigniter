<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //navbar/sidebar
$routes->get('/navbar', 'Home::index'); 
$routes->get('/buku', 'Home::buku'); 
$routes->get('/penerbit', 'Home::penerbit'); 


