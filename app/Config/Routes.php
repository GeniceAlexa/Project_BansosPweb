<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pages::index');

$routes->get('/admin', 'pages::admin');

$routes->get('/login', 'pages::login');


//Data User
$routes->get('/', 'pages::index');
$routes->get('/user', 'pages::index');
$routes->get('/user/ubah/(:num)', 'pages::ubah/$1');
$routes->post('/user/update/(:num)', 'pages::update/$1');
