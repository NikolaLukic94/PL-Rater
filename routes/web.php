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
Route::get('/subs/index','SubmissionController@index');
Route::get('/subs/create','SubmissionController@create');
Route::post('/subs/create','SubmissionController@store');
Route::get('/subs/edit/{id}', 'SubmissionController@edit');
Route::post('/subs/edit/{id}', 'SubmissionController@update');
Route::delete('/subs/delete/{id}', 'SubmissionController@destroy');

Route::get('/rate/index','RateController@index');
Route::get('/rate/define','RateController@create');
Route::post('/subs/define','RateController@store');
