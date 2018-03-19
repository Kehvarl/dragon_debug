<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/session', 'SessionController@index');
//Route::get('/session/{session}', 'SessionController@show');
//Route::post('/session', 'SessionController@create');
Route::resource('session', 'SessionController');
Route::resource('dragon', 'DragonController');
