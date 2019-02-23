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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'subs'], function () {
	Route::get('/index','SubmissionController@indexSubEmail');
	Route::get('/create','SubmissionController@createSubEmail');
	Route::get('/IndexAndSearch','SubmissionController@IndexAndSearch');//maybe not needed?
	Route::post('/create','SubmissionController@storeSubEmail');
	Route::get('/show/{id}','SubmissionController@showSubEmail');
	Route::get('/edit/{id}', 'SubmissionController@editSubEmail');
	Route::post('/edit/{id}', 'SubmissionController@updateSubEmail');
	Route::delete('/delete/{id}', 'SubmissionController@destroy');
	Route::get('/define','RateController@store');	
	Route::post('/define','RateController@store');	
	Route::get('/search','SubmissionController@searchSubEmail');	
	Route::post('/search/results','SubmissionController@searchResultWithSearchMask');
	Route::get('/eff','SubmissionController@getSubsWithEffDateWithinCurrentMonth');

});

Route::group(['prefix' => 'file'], function () {
	Route::get('/index/','FileController@index');
	Route::get('/create/{id}','FileController@create');
	Route::post('/create/{id}','FileController@store');	
	Route::get('/search','FileController@searchView');
	Route::any('/search/results', 'FileController@searchResultWithSearchMask');
	Route::get('/index/{id}','FileController@show');	
	Route::post('/update/rating-characteristics/{id}','FileController@updateRatingCharacteristicsOnly');
	Route::post('/update/general-info/{id}','FileController@updateGeneralInfo');
});

Route::group(['prefix' => 'users'], function () {
	Route::get('/','UserController@index');
});

Route::group(['prefix' => 'rate'], function () {
	Route::get('/index','RateController@index');
	Route::get('/define','RateController@create');
	Route::post('/define','RateController@store');
	Route::get('/show/{id}','RateController@show');	
	Route::get('/edit/{id}', 'RateController@edit');	
	Route::post('/edit/{id}', 'RateController@update');	
});

Route::group(['prefix' => 'rater'], function () {
	Route::get('/prepare/{id}','RaterController@prepareRw');
	Route::get('/rate/{id}','RaterController@getRateCoeficientsAndPreview');
	Route::get('/rate/rw/{file_id}/{rater_id}','RaterController@generateRw');
	Route::get('/rate/rw/{file_id}/{rater_id}/word','RaterController@rwToWord');
});

Route::group(['prefix' => 'rating-worksheet'], function () {
	Route::get('/store/{file_id}/{rater_id}','RatingWorksheetController@store');
	Route::get('/index/{id}','RatingWorksheetController@index'); //since will be redirected from files page to RWs belonging to that file
	Route::get('/show/{id}','RatingWorksheetController@show');	
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


Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::group(['prefix' => 'manage'], function () {
	Route::get('/dashboard','ManageController@dashboard');//->middleware('role:superadministratr|administrator|seniorUw');
	Route::get('/users/index','ManageController@indexUsers');
	Route::get('/users/create','ManageController@createUsers');
	Route::post('/users/create','ManageController@storeUsers');
	Route::get('/users/edit/{id}','ManageController@editUsers');
	Route::get('/users/edit/{id}','ManageController@updateUsers');
});


Route::group(['prefix' => 'manage/role'], function () {
	//Route::get('/dashboard','ManageController@dashboard');//->middleware('role:superadministratr|administrator|seniorUw');
	Route::get('/index','RoleController@index');
	Route::get('/create','RoleController@create');
	Route::post('/create','RoleController@store');
	Route::get('/edit/{id}','RoleController@edit');
	Route::get('/edit/{id}','RoleController@update');
});


Route::get('add-to-log', 'WelcomeController@myTestAddToLog');
Route::get('logActivity', 'WelcomeController@logActivity');

Route::post('/uploadImg','FolderController@uploadImg');