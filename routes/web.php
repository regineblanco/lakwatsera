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
    return view('landing_page');
});

// Route::get('/first_questions', function () {
// 	return view('questions.first');
// });

// Route::get('/second_question', function() {
// 	return view('questions.second');
// });

// Route::get('/interests', 'InterestsController@index');

// Route::get('/interests/{interest}', 'InterestsController@show');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questions/first', [
    'as' => 'view.questions',
    'uses' => 'UserController@viewFirstQ'
]);

Route::patch('/questions/second/{id}', [
  'as' => 'update.first',
  'uses' => 'UserController@viewSecondQ'
]);

Route::patch('/user/itineraries/{id}', [
    'as' => 'update.second',
    'uses' => 'UserController@completeUserSettings'
]);

// Route::post('/questions/first', 'UserController@store');

// Route::patch('/users/{id}',
//   'as' => 'user.update_2',
//   'uses'=> 'UserController'
// );

Route::get('/itineraries', 'ItineraryController@index');

Route::get('/itineraries/create', 'ItineraryController@add');

Route::get('/itineraries/{id}', 'ItineraryController@view');

Route::post('/itineraries', 'ItineraryController@store');
