<?php


Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test','WelcomeController@test');

Route::group(['prefix' => 'subs/emails'], function () {
	Route::get('/index','SubmissionEmailController@index');
	Route::get('/create','SubmissionEmailController@create');	
	Route::post('/create','SubmissionEmailController@store');
	Route::get('/show/{id}','SubmissionEmailController@show');
	Route::get('/edit/{id}', 'SubmissionEmailController@edit');
	Route::post('/edit/{id}', 'SubmissionEmailController@updateS');
	Route::delete('/delete/{id}', 'SubmissionEmailController@destroy');
//	Route::get('/IndexAndSearch','SubmissionController@IndexAndSearch');//maybe not needed?
//	Route::get('/search','SubmissionController@searchSubEmail');	
//	Route::post('/search/results','SubmissionController@searchResultWithSearchMask');
});

Route::group(['prefix' => 'subs'], function () {
	Route::any('/index','SubmissionController@index');
	Route::get('/create','SubmissionController@create');//FIXED	
	Route::post('/create','SubmissionController@store');
	Route::get('/show/{id}','SubmissionController@show');
	Route::get('/edit/{id}', 'SubmissionController@edit');
	Route::post('/edit/{id}', 'SubmissionController@updateS');
});

Route::group(['prefix' => 'file'], function () {
	Route::any('/index/','FileController@index');
	Route::get('/create/{id}','FileController@create');
	Route::post('/create/{id}','FileController@store');	
	Route::get('/show/{id}','FileController@show');	
});

Route::group(['prefix' => 'file/rating-characteristics'], function () {	
	Route::post('/update/{id}','FileRatingCharacteristicsController@update');
});

Route::group(['prefix' => 'file/general-info'], function () {	
	Route::post('/update/{id}','FileGeneralInfoController@update');
});

Route::group(['prefix' => 'rate'], function () {
	Route::get('/index','RateController@index');
	Route::get('/create','RateController@create'); 
	Route::post('/create','RateController@store');
	Route::get('/show/{id}','RateController@show');	
	Route::get('/edit/{id}', 'RateController@edit');	
	Route::post('/edit/{id}', 'RateController@update');	
});

Route::group(['prefix' => 'rater'], function () {
	Route::get('/index/{id}','RaterController@index');
	Route::get('/create/{id}','RaterController@create'); 
	Route::get('/rate/rw/{file_id}/{rater_id}','RaterController@store'); 
});

Route::get('/rate/rw/{file_id}/{rater_id}/word','RwWordController@store');


Route::group(['prefix' => 'rating-worksheet'], function () {
	Route::get('/store/{file_id}/{rater_id}','RatingWorksheetController@store');
	Route::get('/index/{id}','RatingWorksheetController@index');
	Route::get('/show/{id}','RatingWorksheetController@show');	
});

Route::get('/create','EmailController@create');
Route::post('/send','EmailController@store');

Route::group(['prefix' => 'notes'], function () {
	Route::get('/index/{id}','NotesController@index');
	Route::get('/create/{id}','NotesController@create');
	Route::post('/create/{id}','NotesController@store');
	Route::get('/delete','NotesController@index');
});

Route::group(['prefix' => 'subs/stats'], function () {
	Route::get('/index','SubmissionStatsController@index'); 
});

Route::get('/create-pdf','PdfSubmissionEmailController@store');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::group(['prefix' => 'manage/users'], function () {
	Route::get('/dashboard','ManageUsersController@dashboard');//->middleware('role:superadministratr|administrator|seniorUw');
	Route::get('/index','ManageUsersController@index');
	Route::get('/create','ManageUsersController@create');
	Route::post('/create','ManageUsersController@store');
	Route::get('/show/{id}','ManageUsersController@show');	
	Route::get('/edit/{id}','ManageUsersController@edit');
	Route::post('/edit/{id}','ManageUsersController@update');
});

Route::group(['prefix' => 'manage/role'], function () {
	//Route::get('/dashboard','ManageController@dashboard');//->middleware('role:superadministratr|administrator|seniorUw');
	Route::get('/index','RoleController@index');
	Route::get('/create','RoleController@create');
	Route::post('/store','RoleController@store');
	Route::get('/edit/{id}','RoleController@edit');
	Route::post('/edit/{id}','RoleController@update');
});

Route::post('/uploadImg','FolderController@uploadImg');