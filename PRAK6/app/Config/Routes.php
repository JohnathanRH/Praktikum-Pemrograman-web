<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('mahasiswa/profile/(:num)', 'MahasiswaController::show/$1', ['as' => 'mahasiswa.profile']);
$routes->get('pengalaman/(:num)', 'PengalamanController::show/$1', ['as' => 'pengalaman.detail']);