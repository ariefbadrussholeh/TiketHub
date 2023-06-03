<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/',           'Home::index');
$routes->get('/cari-tiket', 'Home::cari_tiket');
$routes->get('/admin',      'Home::admin_dashboard', ['filter' => 'role:admin']);

$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
    // Admin Transportations
    $routes->get('transportasi', 'AdminTransportationsController::index');
    $routes->get('transportasi/tambah', 'AdminTransportationsController::tambah');
    $routes->post('transportasi/tambah', 'AdminTransportationsController::save');
    $routes->delete('transportasi/(:num)', 'AdminTransportationsController::delete/$1');
    $routes->get('transportasi/edit/(:num)', 'AdminTransportationsController::edit/$1');
    $routes->post('transportasi/update/(:num)', 'AdminTransportationsController::save_edit/$1');

    // Routes
    $routes->get('rute', 'AdminRoutesController::index');
    $routes->get('rute/tambah', 'AdminRoutesController::tambah');
    $routes->post('rute/tambah', 'AdminRoutesController::save');
    $routes->delete('rute/(:num)', 'AdminRoutesController::delete/$1');
    $routes->get('rute/edit/(:num)', 'AdminRoutesController::edit/$1');
    $routes->post('rute/update/(:num)', 'AdminRoutesController::save_edit');
    
    // Jadwal
    $routes->get('jadwal', 'AdminSchedulesController::index');
    $routes->get('jadwal/tambah', 'AdminSchedulesController::tambah');
    $routes->post('jadwal/tambah', 'AdminSchedulesController::save');
    $routes->delete('jadwal/(:num)', 'AdminSchedulesController::delete/$1');
    $routes->get('jadwal/edit/(:num)', 'AdminSchedulesController::edit/$1');
    $routes->post('jadwal/update/(:num)', 'AdminSchedulesController::save_edit');

    // Tiket
    $routes->get('tiket', 'AdminTicketsController::index');
    $routes->post('tiket', 'AdminTicketsController::update');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
