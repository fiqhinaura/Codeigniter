<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/obat', 'Home::index');
$routes->get('/add_data_obat', 'Home::add_data_obat');
$routes->post('/proses_add_obat', 'Home::proses_add_obat');

$routes->get('/edit_data_obat/(:any)', 'Home::edit_data_obat/$1');
$routes->post('/proses_edit_obat', 'Home::proses_edit_obat');

$routes->get('/hapus_data_obat/(:any)', 'Home::hapus_data_obat/$1');