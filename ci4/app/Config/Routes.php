<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::home');
$routes->get('/', 'LoketPanggil::panggil');
$routes->get('user', 'Antrian::index');
$routes->get('admin', 'Pelayanan::index');


$routes->group('admin', function ($routes) {
    $routes->get('pelayanan', 'Pelayanan::index');
    $routes->get('pelayanan/add', 'Pelayanan::add');
    $routes->get('pelayanan/edit', 'Pelayanan::edit');
    $routes->add('pelayanan/add', 'Pelayanan::add');
    $routes->add('pelayanan/edit/(:any)', 'Pelayanan::edit/$1');
    $routes->get('pelayanan/delete/(:any)', 'Pelayanan::delete/$1');

    $routes->get('loket', 'Loket::index');
    $routes->get('loket/add', 'Loket::add');
    $routes->get('loket/edit', 'Loket::edit');
    $routes->add('loket/edit/(:any)', 'Loket::edit/$1');
    $routes->add('loket/add', 'Loket::add');
    $routes->get('loket/delete/(:any)', 'Loket::delete/$1');

    $routes->get('loketpanggil', 'LoketPanggil::index');
    $routes->get('loketpanggil/panggil', 'LoketPanggil::panggil');
    $routes->get('loketpanggil/edit', 'LoketPanggil::edit');
    $routes->add('loketpanggil/edit/(:any)', 'LoketPanggil::edit/$1');
    $routes->get('loketpanggil/delete/(:any)', 'LoketPanggil::delete/$1');

    $routes->get('dashboard', 'Antrian::dashboard');
});

$routes->group('user', function ($routes) {
    $routes->get('antrian', 'Antrian::index');
    $routes->get('antrian/add', 'Antrian::add');
    $routes->add('antrian/add', 'Antrian::add');
    $routes->get('antrian/nomor', 'Antrian::nomor');
    $routes->get('antrian/dashboard', 'Antrian::dashboard_user');
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
