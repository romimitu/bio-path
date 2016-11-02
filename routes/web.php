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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/agents', 'AgentsController@index');
Route::post('/agent/store', 'AgentsController@store');
Route::get('agent/{id}/edit', 'AgentsController@edit');
Route::post('agent/{id}/update', 'AgentsController@update');
Route::post('agent/delete/{id}', 'AgentsController@destroy');

Route::get('/bills', 'BillingController@upload' );
