<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/loginPage', 'Users::login');
$routes->get('/moodboardPage', 'Users::moodboard');
$routes->get('/roadmapPage', 'Users::roadmap');
$routes->get('/employeeCreationPage', 'Users::employeeCreation');
$routes->post('login', 'Auth::login');
$routes->post('logout', 'Auth::logout');
