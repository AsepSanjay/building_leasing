<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('/ajax/fasilitas', 'UserController@cekfasilitas');

Route::get('/', function () {
    return view('welcome');
});
Route::auth();

Route::get('register','RegisterController@getRegister');
Route::post('postRegister','RegisterController@postRegister');

Route::get('login','LoginController@getLogin');
Route::post('postlogin','LoginController@postLogin');

Route::get('home', 'HomeController@index');

Route::get('admin', 'AdminController@admin');

Route::get('user', 'UserController@user');

Route::get('admin/member/data_member', 'AdminController@data_member');
Route::get('admin/member/konfirm_member', 'AdminController@konfirm_member');
Route::get('admin/fasilitas', 'AdminController@fasilitas');
Route::get('admin/jadwal', 'AdminController@jadwal');

Route::get('user/pesan', 'UserController@pesan');
Route::get('user/statuspesan', 'UserController@statusPesan');
Route::get('user/akun', 'UserController@akun');
Route::get('user/riwayat', 'UserController@riwayatPesan');

Route::get('auth/logout', 'Auth\AuthController@logout');

Route::get('pageAksesKhusus', function(){
	return view('pageAksesKhusus');
});

Route::get('delete','AdminController@delete');

Route::get('update','AdminController@Update');