<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin\Dashboard;
use App\Controllers\Admin\Service;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Dashboard::class, 'index']);
$routes->get('/admin/dashboard', [Dashboard::class, 'index']);
$routes->get('/admin/service/category', [Service::class, 'table']);
$routes->get('/admin/service/category/detail/(:any)', [Service::class, 'detail/$1']);
$routes->get('/admin/service/category/create', [Service::class, 'createForm']);
$routes->post('/admin/service/category/create/action', [Service::class, 'createAction']);
$routes->get('/admin/service/category/edit/(:any)', [Service::class, 'updateForm/$1']);
$routes->post('/admin/service/category/update/(:any)', [Service::class, 'updateAction/$1']);
$routes->delete('/admin/service/category/delete/(:num)', [Service::class, 'deleteAction/$1']);
