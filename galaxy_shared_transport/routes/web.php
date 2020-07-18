<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get/all/roles', 'RroleController@all')->name('roels');
Route::middleware('ajex.check')->group(function(){
	Route::get('/driver', 'DriverController@index')->name('add-driver');
	Route::get('/add/driver', 'DriverController@create')->name('add-driver');
	Route::get('/save/driver', 'DriverController@save')->name('save-driver');
	Route::get('/update/driver', 'DriverController@update')->name('update-driver');
	Route::get('/destroy/driver', 'DriverController@save')->name('destroy-driver');

});
route::get('/driver/login','DriverController@login');
route::get('/driver/asign/vehicle','DriverController@vehicle');
route::get('/onner/add/driver/','DriverController@create');
route::post('/onner/save/driver/','DriverController@save')->name('onner-save-driver');
route::get('/onner/add/vehicle','VehicelController@create');
route::post('/onner/save/vehicle','VehicelController@save')->name('onner-save-vehicle');
route::get('/admin/registar','AdminController@newUser');
route::post('/admin/save','AdminController@saveUser')->name('admin-save-user');
route::get('/trip/add','TripController@create');
route::post('/trip/save','TripController@save');
route::get('/trip/list','TripController@list');
route::get('/trip/update','TripController@update');