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

// use App\Interest;
//reference it here so you can just use Interest instead of App\Interest

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/questions/first', [
    'as' => 'view.questions',
    'uses' => 'UserController@viewFirstQ'
]);

Route::patch('/questions/second/{id}', [
  'as' => 'update.first',
  'uses' => 'UserController@viewSecondQ'
]);

Route::patch('/itineraries/{id}', [
    'as' => 'update.second',
    'uses' => 'UserController@completeUserSettings'
]);

Route::get('/itineraries', 'ItineraryController@index');

// Route::get('/itineraries/create', 'ItineraryController@add');
//
// Route::get('/itineraries/{id}', 'ItineraryController@view');
//
// Route::post('/itineraries', 'ItineraryController@store');
