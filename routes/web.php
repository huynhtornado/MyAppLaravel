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

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes();
Route::group(['namespace' => 'Auth'], function() {
    Route::group(['prefix' => 'login', 'middleware' => 'checklogin'], function() {
        Route::get('/','LoginController@index')->name('login');
        Route::post('/','LoginController@postLogin')->name('postlogin');
    });

    Route::group(['prefix' => 'register', 'middleware' => 'checkregister'], function() {
        Route::get('/','RegisterController@index')->name('register');
        Route::post('/','RegisterController@create')->name('register.create');
    });

    Route::group(['prefix' => 'forgotpassword', 'middleware' => 'forgotpassword'], function() {
        Route::get('/','ForgotPasswordController@index')->name('forgotpassword.email');
        Route::post('/','ForgotPasswordController@resetPassword')->name('register.find');
    });
});


Route::get('logout', 'HomeController@getLogout')->name('logout');