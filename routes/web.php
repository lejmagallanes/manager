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
Route::post('/login', 'SessionsController@store');
Route::post('/logout', 'SessionsController@destroy');


// Registration
// Route::post('/users', 'RegistrationController@store');
// Route::get('/users', 'RegistrationController@index');

//Home
Route::get('/', 'HomeController@index')->name('home');

// Route::get('/{role}', 'RolesController@index');

Route::get('/users', 'UsersController@index');
Route::post('/users/search', 'UsersController@search');
Route::get('/users/create', 'UsersController@create');
Route::post('/users', 'UsersController@store');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users/{user}', 'UsersController@update');
