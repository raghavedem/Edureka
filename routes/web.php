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
//     return view('home');
// });
// Route::get('/vendors', function () {
//     return view('vendors');
// });

// Route::get('/our-reps', function () {
//     return view('our_reps');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/', 'ClientController@index');
Route::get('/contact', 'ClientController@Contact');
Route::get('/about', 'ClientController@About');
Route::get('/our-reps', 'ClientController@ourReps');
Route::get('/vendors', 'ClientController@vendors');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

