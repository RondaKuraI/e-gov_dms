<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Home::index');
$routes->get('/static', 'Home::static');
$routes->get('/', 'RegisterController::index');
$routes->post('/register', 'RegisterController::register');

$routes->get('/view', 'TestController::viewFilters');
$routes->get('/index', 'TestController::index');