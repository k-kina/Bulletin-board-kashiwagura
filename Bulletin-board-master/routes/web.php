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

// ログイン
Route::get('/login', 'Auth\Login\LoginController@loginView')->name('loginView');
        Route::post('/login/post', 'Auth\Login\LoginController@loginPost')->name('loginPost');
// 新規会員登録
        Route::get('/register', 'Auth\Register\RegisterController@registerView')->name('registerView');
        Route::post('/register/post', 'RegisterController@registerPost')->name('registerPost');
