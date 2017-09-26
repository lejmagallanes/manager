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

Auth::routes();


// Sessions
// Route::get('/login', 'SessionsController@store');
// Route::post('/login', 'SessionsController@store');
// Route::post('/logout', 'SessionsController@destroy');


//Home
Route::get('/', 'HomeController@index')->name('home');

// Route::get('/{role}', 'RolesController@index');

Route::post('/users/search', 'UsersController@search');
Route::get('/users', 'UsersController@index');
Route::get('/create/users', 'UsersController@create');
Route::post('/users', 'UsersController@store');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users/{user}', 'UsersController@update');

// Route::get('/users/{user}', 'UsersController@show');

//Permissions
Route::get('/permissions', 'PermissionsController@index');
Route::post('/permissions/search', 'PermissionsController@search');
Route::get('/permissions/{role}', 'PermissionsController@show');
Route::get('/permissions/{role}/delete/{permission}', 'PermissionsController@destroy');
Route::patch('/permissions/{role}/permission', 'PermissionsController@addPermission');


//Accounting
Route::get('/accounting', 'AccountingController@index');
Route::get('/accounting/report', 'AccountingController@report');
Route::get('/accounting/graph', 'AccountingController@graph');
Route::get('/accounting/extra', 'AccountingController@extra');



//Profile
// Route::get('/profile/{user}', 'ProfilesController@index');

