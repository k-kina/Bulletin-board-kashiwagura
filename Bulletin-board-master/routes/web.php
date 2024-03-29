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

// Route::get('/', function () {
//     return view('welcome');
// });

// ログイン画面表示
Route::get('/login', 'Auth\Login\LoginController@loginView')->name('loginView');
// ログイン
Route::post('/login/post', 'Auth\Login\LoginController@loginPost')->name('loginPost');
// 新規会員登録
Route::get('/register', 'Auth\Register\RegisterController@registerView')->name('registerView');
Route::post('/register/post', 'Auth\Register\RegisterController@registerPost')->name('registerPost');
