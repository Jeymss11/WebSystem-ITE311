<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Home::index');

// Custom routes
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');


$routes->get('/login', 'Auth::login');
$routes->post('/loginPost', 'Auth::loginPost');
$routes->get('/register', 'Auth::register');
$routes->post('/registerPost', 'Auth::registerPost');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');