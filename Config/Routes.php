<?php

namespace Config;

use CodeIgniter\Routing\RouteCollection;

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Redirect the default URL to the dashboard
$routes->get('/', 'Home::dashboarddesign'); // Home page redirects to dashboard
$routes->get('/dashboarddesign', 'Home::dashboarddesign'); // Dashboard route
$routes->get('/about', 'Home::about'); // About page
$routes->get('/feedback', 'Home::feedback'); // Registration page
$routes->get('/login', 'Auth::login'); // Route for login page
$routes->post('/login', 'Auth::doLogin'); // Route for handling login form submission

