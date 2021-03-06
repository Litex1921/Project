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

Route::get('/test','Project@render');
	

Route::post('/test','Project@myLuck');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/motor', 'Admin\MotorsController');
Route::resource('/model', 'ModelsController');
Route::resource('/manufacturer', 'ManufacturersController');
Route::get('/motor/{id}/delete', 'Admin\MotorsController@destroy');
Route::get('/model/{id}/delete', 'ModelsController@destroy');
Route::get('/manufacturer/{id}/delete', 'ManufacturersController@destroy');
// Route::get('/motor','MotorsController@index');
// Route::get('/motor/{id}','MotorsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index');
Route::get('/users/{id}/admin/{admin}', 'UserController@admin');
