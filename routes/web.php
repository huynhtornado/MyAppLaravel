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
    return view('index');
});

// Route::get('/table/{number?}', function($number = 3) {
//     for ($i = 1; $i <= 10; $i++) {
//         echo "$i * $number = " .$i * $number . "</br>";
//     }
// })->where('number','[0-9]+')->name('table');

// Route::get('/demo', function ($test = 'OKEOKE') {
//     return view('demo', ['name' => $test]);
//     //return View::make('demo');
// });


// Route::get('/role/{role?}', 'TestController@index')->middleware('Role:editor');
// // Route::put('/books/{book}', 'BooksController@update')->middleware('year');

// Route::get('/path', 'TestController@showPath')->middleware('Role:hello');

// Route::get('/home', function () {
//     //return view('welcome');
//     return View::make('pages.home');
// });

// Route::get('/contact', function()
// {
//    return View::make('pages.contact');
// });