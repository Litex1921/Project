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

Route::resource('/admin/motor', 'Admin\MotorsController');
Route::resource('/model', 'ModelsController');
Route::resource('/manufacturer', 'ManufacturersController');
Route::get('/motor','MotorsController@index');
Route::get('/motor/{id}','MotorsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
