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

use App\Interest;
//reference it here so you can just use Interest instead of App\Interest

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/first_questions', function () {
	return view('first_questions');
});

Route::get('/second_question', function() {
	return view('second_question');
});

Route::get('/interests', 'InterestsController@index');

Route::get('/interests/{interest}', 'InterestsController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
