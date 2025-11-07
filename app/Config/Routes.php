<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pages::index');

$routes->get('/admin', 'pages::admin');

$routes->get('/login', 'pages::login');
