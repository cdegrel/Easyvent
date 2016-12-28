<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Home
Route::get('/', 'HomeController')->name('home');

// Admin panel
Route::group(['middleware' => 'web'], function () {

    Auth::routes();

    Route::get('dashboard', 'AdminController')->name('dashboard');

    Route::resource('account', 'AccountController');
    Route::resource('events', 'EventController');
});

// Auth


