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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/popular', 'PagesController@popular')->name('popular');

Route::get('/recent', 'PagesController@recent')->name('recent');

Route::group(['prefix' => 'likes'], function() {

  // get number of likes of a palette
  Route::get('/{id}', 'LikesController@getLikes');
  // like a palette
  Route::put('/{id}/like', 'LikesController@like');
  // unlike a palette
  Route::put('/{id}/unlike', 'LikesController@unlike');


});


Auth::routes();

// Wrap profile specific routes
Route::group(['prefix' => 'profile'], function() {

  // get current logged in user
  Route::get('/', 'ProfileController@index')->middleware('auth');

  // CRUD resource for palettes
  Route::resource('palettes', 'PalettesController', [
    'except' => ['show']
  ]);

});
