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
Route::post('/getReport', 'PublicController@getreport');

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

Route::get('search/agent', 'BillingController@autocomplete');

Route::get('bill/preview/{id}', 'BillingController@preview');

// For Admin Sections Test report System

Route::get('/testreports', 'TestReportController@index' );
Route::get('/testreports/create/{id}', 'TestReportController@create' );
Route::post('/testreports/store/{id}', 'TestReportController@store' );
Route::get('/testreports/view/{id}', 'TestReportController@show' );
Route::get('testreports/printview/{id}', 'TestReportController@reportpreview');

// For Admin Sections Income report System

Route::get('/income-reports', 'IncomeReportController@index' );
Route::get('/income-report', 'IncomeReportController@report' );