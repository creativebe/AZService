<?php

use App\User;

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

/*Route::get('/', function(){
	return view('welcome');
});*/

//Auth::routes();

Route::group(['middleware => web'], function(){
	Route::auth();
	Route::get('/','HomeController@index');
	Route::get('/manage-customer','CustomerController@index');
	Route::get('/transaksi','TransaksiController@index');
});
Route::group(['middleware => admin'], function(){
	Route::get('/manage-users','UsersController@index');
	Route::get('/manage-users/{user}','UsersController@show');
	Route::post('/manage-users/edit','UsersController@edit');

	

	Route::get('/manage-privilege','PrivilegeController@index');
});