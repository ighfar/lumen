<?php

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

$router->group(['prefix' => 'api/v1'], function() use($router){
    $router->get('data',  'DataController@index');
    $router->get('data/{id}', 'DataController@show');
    $router->post('data', 'DataController@create');
    $router->put('data/{id}', 'DataController@update');
    $router->delete('data/{id}', 'DataController@delete');
});