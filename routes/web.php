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


Route::get('/', 'ClientController@index');
Route::get('/contact', 'ClientController@Contact');
Route::get('/about', 'ClientController@About');
Route::get('/our-reps', 'ClientController@ourReps');
Route::get('/vendors', 'ClientController@vendors');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/vendors', 'HomeController@vendors')->name('AdminVendors');
Route::get('/admin/vendor/{id}/edit', 'HomeController@vendorEdit');
Route::post('/admin/vendor', 'HomeController@vendorSave')->name('SaveVendor');

Route::get('/admin/reps', 'HomeController@reps')->name('AdminReps');
Route::get('/admin/rep/{id}/edit', 'HomeController@repEdit');
Route::post('/admin/rep', 'HomeController@repSave')->name('SaveRep');

Route::get('/admin/contact', 'HomeController@contact')->name('AdminContact');
Route::post('/admin/contact', 'HomeController@contact')->name('SaveContact');

Route::get('/admin/about', 'HomeController@about')->name('AdminAbout');
Route::get('/admin/about/{id}/edit', 'HomeController@aboutEdit');
Route::post('/admin/about', 'HomeController@about')->name('SaveAbout');

Route::get('/admin/sliders', 'HomeController@sliders')->name('AdminSliders');
Route::get('/admin/slider/{id}/edit', 'HomeController@sliderEdit');
Route::post('/admin/slider', 'HomeController@sliderSave')->name('SaveSlider');

Route::get('/admin/contact_details', 'HomeController@contactDetails')->name('AdminContactDetails');
Route::get('/admin/contact_detail/{id}/edit', 'HomeController@contactDetailEdit');
Route::post('/admin/contact_detail', 'HomeController@contactDetailSave')->name('SaveContactDetail');