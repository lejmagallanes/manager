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



//Sessions
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::post('/logout', 'SessionsController@destroy');


//Registration
Route::get('/users/create', 'RegistrationController@create');
Route::post('/users', 'RegistrationController@store');
Route::get('/users', 'RegistrationController@index');

//Home
Route::get('/', 'HomeController@index')->name('home');
