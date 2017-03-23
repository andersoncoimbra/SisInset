<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', ['uses'=>'HomeController@index', 'as'=>'home']);

//Clientes
Route::get('/novocliente', ['uses'=>'ClienteController@getnovo', 'as'=>'get.novocliente']);
Route::post('/novocliente', 'ClienteController@postnovo');

//Serviços
Route::get('/registrarservico', ['uses'=>'ServicesController@getnovo', 'as'=>'get.novoservico']);
Route::post('/registrarservico', ['uses'=>'ServicesController@postnovo', 'as'=>'post.novoservico']);
Route::get('/todosservicos', ['uses'=>'ServicesController@todosservicos', 'as'=>'get.todosservico']);




