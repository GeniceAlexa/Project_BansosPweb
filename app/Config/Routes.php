<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pages::index');
$routes->get('pages', 'pages::index');

$routes->get('/admin', 'bansos::admin');


$routes->get('/login', 'bansos::index');


//Data User
$routes->get('/', 'pages::index');
$routes->get('/user', 'pages::index');
$routes->get('/user/ubah/(:num)', 'pages::ubah/$1');
$routes->post('/user/update/(:num)', 'pages::update/$1');

$routes->get('/profil', 'bansos::profil');
$routes->get('/ubah', 'bansos::ubah');

$routes->get('/login', 'bansos::index');
$routes->get('/dokumentasi', 'bansos::dokum');


