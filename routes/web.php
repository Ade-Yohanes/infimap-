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
    return view('home');
});


// rooting untuk verification send email 
Auth::routes(['verify' => true]);

Route::get('/homeadmin', 'HomeAdminController@index')->name('homeadmin')->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fixflood', 'FixfloodController@index')->name('fixflood');
