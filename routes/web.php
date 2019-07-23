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

//Route::get('/login', 'Auth\LoginController@getLogin')->name('login');

Route::group(['prefix' => 'login', 'namespace' => 'Auth', 'middleware' => 'checklogin'], function() {
    Route::get('/','LoginController@getLogin');
    Route::post('/','LoginController@postLogin');
    //Route::post('/login', 'LoginController@postLogin')->name('loginForm');
});
