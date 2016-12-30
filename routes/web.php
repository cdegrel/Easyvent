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

Route::get('/parcourir', 'HomeController');

Route::get('/e/{id}', 'HomeController@show');

// Admin panel
Route::group(['middleware' => 'web'], function () {

    Auth::routes();

    Route::get('dashboard', 'AdminController')->name('dashboard');

    Route::resource('account', 'AccountController');
    Route::resource('organizer', 'OrganizerController');
    Route::resource('event', 'EventController');

    Route::post('account.storeAvatar', 'AccountController@storeAvatar')->name('avatar');
});


