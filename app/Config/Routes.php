<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

// Login 
$routes->get('/login', 'AuthController::index');
$routes->post('/auth/login', 'AuthController::login');
$routes->post('/auth/logout', 'AuthController::logout');

// Home Dashboard
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);

// Setting Role
$routes->get('/role', 'RoleController::index', ['filter' => 'auth']);
$routes->post('/role/add', 'RoleController::add', ['filter' => 'auth']);
$routes->post('/role/update/(:segment)', 'RoleController::update/$1', ['filter' => 'auth']);
$routes->post('/role/delete/(:segment)', 'RoleController::delete/$1', ['filter' => 'auth']);

// Setting User
$routes->get('/user', 'UserController::index', ['filter' => 'auth']);
$routes->post('/user/add', 'UserController::add', ['filter' => 'auth']);
$routes->post('/user/update/(:segment)', 'UserController::update/$1', ['filter' => 'auth']);
$routes->post('/user/delete/(:segment)', 'UserController::delete/$1', ['filter' => 'auth']);

// Menu Project
$routes->get('/manage_my_project', 'ProjectController::index', ['filter' => 'auth']);
