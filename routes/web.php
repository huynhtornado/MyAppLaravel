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

Route::get('logout', 'HomeController@getLogout')->name('logout');

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

    Route::group(['prefix' => 'password', 'middleware' => 'forgotpassword'], function() {
        Route::get('/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/reset', 'ResetPasswordController@reset')->name('password.resetagain');
    });
});

// Route for Blog Page
Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function() {
    // Route::group(['prefix' => 'login'], function() {
        Route::get('/', 'BlogController@index')->name('blog');
    // });
});