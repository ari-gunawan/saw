<?php

namespace Config;

use App\Controllers\Presensi;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/home', 'Home::index', ['filter' => 'auth']);
$routes->get('/detail', 'DataKaryawan::index');
$routes->get('/detail', 'DataKaryawan::index');
$routes->get('DataKaryawan-detail/(:any)', 'DataKaryawan::detail/$1');
$routes->get('/dropdown/get_uker', 'Dropdown::getUker');
$routes->get('/updata/get_nama_pekerja', 'updata::getNamaPekerja');
$routes->post('/calculate-saw', 'CapaianKaryawan::calculate_saw_from_input');
$routes->get('ListKaryawan/edit/(:num)', 'ListKaryawan::edit/$1');

// Route untuk mengedit Nilai
$routes->post('/ListKaryawan/saveEdit', 'ListKaryawan::saveEdit');

// Route untuk menampilkan view tabelKaryawan
$routes->get('tabel-karyawan', 'DropdownController::index');

// Route untuk mendapatkan data Unit berdasarkan Kanca
$routes->get('get-units/(:any)', 'DropdownController::getUnits/$1');


// $routes->get('/Presensi/edit/(:segment)', 'Presensi::edit/');

$routes->post('order/cancel', 'OrderController::cancel');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
