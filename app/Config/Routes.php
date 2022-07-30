<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('/api',['namespace' => 'App\Controllers\Api'],  function ($routes) {
    $routes->post('auth/sendOtp', 'Auth\SendOtp::index');
    $routes->post('auth/verifyOtp', 'Auth\VerifyOtp::index');
});

$routes->group("/api", ["filter"=>"ApiAuth", 'namespace' => 'App\Controllers\Api'], function ($routes){
    //my profile relate routes
    $routes->get('me', 'Me\Index::index');
    $routes->put('me', 'Me\Index::update');
    //address related routes
    $routes->get('me/address', 'Me\Address::index');
    $routes->post('me/address', 'Me\Address::addAddress');
    $routes->get('me/address/(:num)', 'Me\Address::getAddress/$1');
    $routes->put('me/address/(:num)', 'Me\Address::updateAddress/$1');
    
    //menu related routes
    $routes->get('restaurant/menu', 'Restaurant\Menu::index');

    //product related data
    $routes->get('restaurant/products', 'Restaurant\Products::products');
    $routes->get('restaurant/popular-products', 'Restaurant\Products::popularProducts');
    $routes->get('restaurant/products/(:num)', 'Restaurant\Products::productDetails/$1');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
