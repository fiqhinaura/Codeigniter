<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/obat', 'Obat::index');
$routes->get('/tambah', 'Obat::simpan');

