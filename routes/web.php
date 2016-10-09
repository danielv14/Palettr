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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Wrap profile specific routes
Route::group(['prefix' => 'profile'], function() {

  // get current logged in user
  Route::get('/', 'ProfileController@index')->middleware('auth');

  // get user by id
  Route::get('{id}', 'ProfileController@profile')->name('profile');

  Route::resource('palettes', 'PalettesController');

});
