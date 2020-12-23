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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//管理側
Route::group(['middleware' => ['auth.admin']], function () {
	//管理側トップ
	Route::get('/admin', 'admin\TopController@show');
	Route::resource('/admin/users', 'admin\UserController');

	//ログアウト実行
	Route::post('/admin/logout', 'admin\LogoutController@logout');
});

//管理側ログイン
Route::get('/admin/login', 'admin\LoginController@showLoginform');
Route::post('/admin/login', 'admin\LoginController@login');