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

$router->group(['prefix' => 'api'], function() use ($router){
    // $router->get('/user', ['uses' => 'UserController@index']);
    // $router->post('/user', ['uses' => 'UserController@create']);
    // $router->get('/user/{id}', ['uses' => 'UserController@show']);
    // $router->put('/user/{id}', ['uses' => 'UserController@update']);
    // $router->delete('/user/{id}', ['uses' => 'UserController@destroy']);
    
    $router->get('/product', ['uses' => 'ProductController@index']);
    $router->get('/order', ['uses' => 'OrderController@index']);

    $router->get('/fakultas', ['uses' => 'FakultasController@index']);
    $router->post('/fakultas', ['uses' => 'FakultasController@create']);
    $router->get('/fakultas/{id}', ['uses' => 'FakultasController@show']);
    $router->put('/fakultas/{id}', ['uses' => 'FakultasController@update']);
    $router->delete('/fakultas/{id}', ['uses' => 'FakultasController@destroy']);

    $router->get('/dosen', ['uses' => 'DosenController@index']);
    $router->post('/dosen', ['uses' => 'DosenController@create']);
    $router->get('/dosen/{id}', ['uses' => 'DosenController@show']);
    $router->put('/dosen/{id}', ['uses' => 'DosenController@update']);
    $router->delete('/dosen/{id}', ['uses' => 'DosenController@destroy']);

});

