<?php

use App\Models\Dosen;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\News; // Add this line
use App\Controllers\Pages;
use CodeIgniter\I18n\Time;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home', 'Home::index');
$routes->get('/Home/contact', 'Home::contact');

//modeling
$routes->get('/dosen', 'Home::tampildosen');

$routes->get('/Home/contact', 'Home::contact');
$routes->get('/biodata', 'Home::biodata');
$routes->get('/matkul', 'Matkul::matkul');
$routes->get('/lihat', 'Home::lihat');

//errorhandling
$routes->get('/kalkulator', 'Calculator::divide');

//helperurl
$routes->get('/sekolah', 'Sekolah::index');

$routes->get('/about', 'Sekolah::about');
$routes->get('/biodatasekolah', 'Sekolah::biodata');

$routes->get('/libraries', function () {
    $myTime = new Time('now', 'Asia/Jakarta');
    // $myTime = new Time('now');

    echo $myTime;
}
);