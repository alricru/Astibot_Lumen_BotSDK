<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Routes to functions from EmployeeController
$router->get('/employees','EmployeeController@findAll');
$router->get('/employees/{id}','EmployeeController@findById');
$router->post('/employees/{id}','EmployeeController@updateById');
$router->post('/employees','EmployeeController@addEmployee');
$router->delete('/employees/{id}','EmployeeController@deleteById');


// Routes to functions from EmployeeController
$router->get('/ships','ShipController@findAll');
$router->get('/ships/{id}','ShipController@findById');
$router->post('/ships','ShipController@addShip');
$router->delete('/ships/{id}','ShipController@deleteById');
$router->post('/ships/{id}','ShipController@updateById');

// Creates a route that gets the function from the controller using the table maintenances
$router->get('/maintenances','MaintenanceController@findAll');
$router->get('/maintenances/{id}','MaintenanceController@findById');
$router->post('/maintenances','MaintenanceController@addMaintenance');
$router->delete('/maintenances/{id}','MaintenanceController@deleteById');
$router->put('/maintenances/{id}','MaintenanceController@updateById');

