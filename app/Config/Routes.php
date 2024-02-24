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


$routes->get('/mail', 'MailController::index');
$routes->get('/verify', 'MailController::verify');


$routes->get('/incoming', 'Home::incoming');
$routes->get('/outgoing', 'Home::outgoing');
$routes->get('/maintenance', 'Home::maintenance');
$routes->get('/reports', 'Home::reports');
$routes->get('/user_management', 'Home::user_management');
$routes->get('/my_account', 'Home::my_account');






