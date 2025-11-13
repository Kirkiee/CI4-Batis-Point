<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public pages
$routes->get('/', 'Users::showLandingPage');
$routes->get('/moodboard', 'Users::showMoodboard');
$routes->get('/roadmap', 'Users::showRoadmap');

// Auth page
$routes->get('/login', 'Auth::showLoginPage');
$routes->get('/signup', 'Auth::showSignupPage');

// Auth actions (Employees Only)
$routes->post('/login', 'Auth::login');
$routes->post('/logout', 'Auth::logout');
$routes->post('/signup', 'Auth::signup');

// (Admin Only)
$routes->post('/admin/employeeCreation', 'Users::showEmployeeCreation');

// Admin pages
$routes->get('/admin/dashboard', 'Admin::showDashboard');
$routes->get('/admin/employeeCreation', 'Admin::showemployeeCreation');
