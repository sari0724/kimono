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

//User
//welcome.blade.phpを表示
Route::get('/', function () {
    return view('welcome');
});
//Authファサードのroutesメソッドは"Vendor\laravel\Framework\Src\Illuminate\Support\Facades\Auth"に記載
Auth::routes();
//”/useroutfit”へのルーティング
Route::get('/useroutfit', 'UserOutfitController@index');
//”/useroutfit”へのルーティング
Route::get('/serviceoutfit', 'ServiceOutfitController@index');

//”/home”へのルーティング
Route::get('/home', 'HomeController@index')->name('home');

//ServiceUser
Route::prefix('serviceuser')->namespace('ServiceUser')->name('serviceuser.')->group(function () {
    Auth::routes();
    //”/serviceuser/home”へのルーティング
    Route::get('/home', 'ServiceUserHomeController@index')->name('serviceuser_home');
});