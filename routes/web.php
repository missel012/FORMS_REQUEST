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

// API routes for form requests
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/form-requests', 'FormRequestController@index'); // Get all form requests
    $router->post('/form-requests', 'FormRequestController@store'); // Create a new form request
    $router->get('/form-requests/{id}', 'FormRequestController@show'); // Get a specific form request by ID
    $router->put('/form-requests/{id}', 'FormRequestController@update'); // Update an existing form request
    $router->patch('/form-requests/{id}', 'FormRequestController@update'); // Partially update an existing form request
    $router->delete('/form-requests/{id}', 'FormRequestController@destroy'); // Delete a form request
});