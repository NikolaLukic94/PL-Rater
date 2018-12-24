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
	Route::get('/index','SubmissionController@index');
	Route::get('/search','SubmissionController@search');
	Route::get('/create','SubmissionController@create');
	Route::get('/IndexAndSearch','SubmissionController@IndexAndSearch');
	Route::post('/create','SubmissionController@store');
	Route::post('/show/{id}','SubmissionController@show');
	Route::get('/edit/{id}', 'SubmissionController@edit');
	Route::post('/edit/{id}', 'SubmissionController@update');
	Route::delete('/delete/{id}', 'SubmissionController@destroy');
	Route::post('/define','RateController@store');	
	Route::post('/define','RateController@store');
});

Route::group(['prefix' => 'file'], function () {
	Route::get('/index','FileController@index');
	Route::get('/create','FileController@create');
});



Route::group(['prefix' => 'rate'], function () {
	Route::get('/index','RateController@index');
	Route::get('/define','RateController@create');
});


Route::get('/prepemail','SubmissionController@prepemail');
Route::post('/prepemail','SubmissionController@sendemail');




Route::get('/pdf','SubmissionController@toPdf');

Route::any('/tickets','TicketController@index');

Route::get('/users/index','UsersController@index');
