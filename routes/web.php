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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'subs'], function () {
	Route::get('/index','SubmissionController@indexSubEmail');
	Route::get('/search','SubmissionController@searchSubEmail');
	Route::get('/create','SubmissionController@createSubEmail');
	Route::get('/IndexAndSearch','SubmissionController@IndexAndSearch');//maybe not needed?
	Route::post('/create','SubmissionController@storeSubEmail');
	Route::get('/show/{id}','SubmissionController@showSubEmail');
	Route::get('/edit/{id}', 'SubmissionController@editSubEmail');
	Route::post('/edit/{id}', 'SubmissionController@updateSubEmail');
	Route::delete('/delete/{id}', 'SubmissionController@destroy');
	Route::get('/define','RateController@store');	
	Route::post('/define','RateController@store');	
});

Route::group(['prefix' => 'file'], function () {
	Route::get('/index','FileController@index');
	Route::get('/create','FileController@create');
});

Route::group(['prefix' => 'users'], function () {
	Route::get('/','UserController@index');

});

Route::group(['prefix' => 'rate'], function () {
	Route::get('/index','RateController@index');
	Route::get('/define','RateController@create');
});

Route::get('/prepemail','SubmissionController@prepemail');
Route::post('/prepemail','SubmissionController@sendemail');

Route::group(['prefix' => 'folder'], function () {
	Route::get('/','UserController@index');
	Route::get('/upload','UserController@index');
	Route::get('/list','UserController@index');
	Route::get('/','UserController@index');
	Route::get('/','UserController@index');
	Route::get('/','UserController@index');
	Route::get('/','UserController@index');
	Route::get('/','UserController@index');
	Route::get('/delete','UserController@index');
});

Route::group(['prefix' => 'reminder'], function () {
	Route::get('/','ReminderController@index');
	Route::get('/list','ReminderController@index');
	Route::get('/','UserController@index');
	Route::get('/','UserController@index');
	Route::get('/delete','UserController@index');
});

Route::group(['prefix' => 'stats'], function () {
	Route::get('/subs','StatsController@index');
});


Route::get('/pdf','SubmissionController@toPdf');

Route::any('/tickets','TicketController@index');

Route::get('/users/index','UsersController@index');
