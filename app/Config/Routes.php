<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'ProductController::index');
$routes->get('/userinterface', 'ProductController::userinterface');
$routes->get('/products', 'ProductController::index');
$routes->get('/products/create', 'ProductController::create');
$routes->post('/products/save', 'ProductController::save');
$routes->get('/products/edit/(:num)', 'ProductController::edit/$1');
$routes->get('/products/update/(:any)', 'ProductController::update/$1');
$routes->get('/products/delete/(:any)', 'ProductController::delete/$1');
$routes->get('/admin', 'AuthController::admin');