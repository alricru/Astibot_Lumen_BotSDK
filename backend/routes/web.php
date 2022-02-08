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

// Creates a route that gets the function from the controller using the table employees
$router->get('/employees','EmployeeController@findAll');
$router->get('/employees/{id}','EmployeeController@findById');
$router->post('/employees','EmployeeController@addEmployee');
$router->delete('/employees/{id}','EmployeeController@deleteById');
$router->post('/employees/{id}','EmployeeController@updateById');

