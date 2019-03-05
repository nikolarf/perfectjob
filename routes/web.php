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

Route::get('/', 'JobsController@index');
Route::get('/home', 'JobsController@index');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::resource('jobs', 'JobsController');


Route::post('send', 'mailController@send');
Route::get('email', 'mailController@email');

Route::get('spam/{email?}', 'AddJobController@spam');
Route::get('notspam/{email?}', 'AddJobController@notspam');

