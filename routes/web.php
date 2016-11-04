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

// For UI Sections

Route::get('/', function () { return view('bio.ui.index');});
Route::get('/about', function () { return view('bio.ui.about');});
Route::get('/services', function () { return view('bio.ui.services');});
Route::get('/test-list', function () { return view('bio.ui.test');});
Route::get('/check-report', function () { return view('bio.ui.get_report');});
Route::get('/contact', function () { return view('bio.ui.contact');});

Auth::routes();

Route::get('/home', 'HomeController@index');

// For Admin Sections recrut agent

Route::get('/agents', 'AgentsController@index');
Route::post('/agent/store', 'AgentsController@store');
Route::get('agent/{id}/edit', 'AgentsController@edit');
Route::post('agent/{id}/update', 'AgentsController@update');
Route::get('agent/{id}/delete', 'AgentsController@destroy');

// For Admin Sections Billing System

Route::get('/bills', 'BillingController@index' );
Route::get('/billing', 'BillingController@create' );
Route::post('/bill/store', 'BillingController@store' );
Route::get('/bill/{id}', 'BillingController@show' );
Route::get('bill/{id}/delete', 'BillingController@destroy');
