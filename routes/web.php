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

$router->post('/loans', 'LoanController@store');
$router->get('/loans/{id}', 'LoanController@show');
$router->put('/loans/{id}', 'LoanController@update');
$router->delete('/loans/{id}', 'LoanController@destroy');
$router->get('/loans', 'LoanController@index');

$router->get('/dbtest', function () use ($router) {
    try {
        \DB::connection()->getPdo();
        return response()->json(['message' => 'Successfully connected to the database.']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Failed to connect to the database.', 'error' => $e->getMessage()]);
    }
});

