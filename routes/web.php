<?php

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::group(['middleware' => 'approved'], function () {
	Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/approval', 'HomeController@show')->name('approval');

Route::middleware(['admin'])->group(function () {
    Route::get('/users', 'UserApprovalController@index')->name('admin.users.index');
    Route::post('/users/{user_id}/approve', 'UserApprovalController@create');
    Route::post('/users/{user_id}/disapprove', 'UserApprovalController@destroy');    
});

Route::group(['prefix' => 'subs/emails',  'middleware' => 'approved'], function () {
	Route::get('/index','SubmissionEmailController@index');
	Route::get('/show/{id}','SubmissionEmailController@show');
	Route::get('/edit/{id}', 'SubmissionEmailController@edit');
	Route::post('/edit/{id}', 'SubmissionEmailController@updateS');
	Route::delete('/delete/{id}', 'SubmissionEmailController@destroy');
});
	Route::get('/subs/emails/create','SubmissionEmailController@create');	
	Route::post('/subs/emails/create','SubmissionEmailController@store');

Route::group(['prefix' => 'file',  'middleware' => 'approved'], function () {
	Route::any('/index/','FileController@index');
	Route::get('/create/{id}','FileController@create');
	Route::post('/create/{id}','FileController@store');	
	Route::get('/show/{id}','FileController@show');	
});

Route::group(['prefix' => 'file',  'middleware' => 'approved'], function () {
	Route::post('rating-characteristics/update/{id}','FileRatingCharacteristicsController');
	Route::post('general-info/update/{id}','FileGeneralInfoController');
});

Route::group(['prefix' => 'rate',  'middleware' => 'approved'], function () {
	Route::get('/index','RateController@index');
	Route::get('/create','RateController@create'); 
	Route::post('/create','RateController@store');
	Route::get('/show/{id}','RateController@show');	
	Route::get('/edit/{id}', 'RateController@edit');	
	Route::post('/edit/{id}', 'RateController@update');	
	Route::delete('/delete/{id}', 'RateController@destroy');	
});

Route::group(['prefix' => 'rater',  'middleware' => 'approved'], function () {
	Route::get('/index/{id}','RaterController@index');
	Route::get('/create/{id}','RaterController@create'); 
	Route::get('/rw/{file_id}/{rater_id}','RaterController@store'); 
});

Route::get('/rate/rw/{file_id}/{rater_id}/word','RwWordController');

Route::group(['prefix' => 'rating-worksheet',  'middleware' => 'approved'], function () {
	Route::get('/store/{file_id}/{rater_id}','RatingWorksheetController@store');
	Route::get('/index/{id}','RatingWorksheetController@index');
	Route::get('/show/{id}','RatingWorksheetController@show');	
});
Route::post('/send-rw','RwEmailController');

Route::group(['prefix' => 'emails',  'middleware' => 'approved'], function () {
	Route::get('/create','EmailController@create');
	Route::post('/send','EmailController@store');	
});

Route::group(['prefix' => 'notes',  'middleware' => 'approved'], function () {
	Route::get('/index/{id}','NotesController@index');
	Route::get('/create/{id}','NotesController@create');
	Route::post('/create/{id}','NotesController@store');
	Route::get('/delete','NotesController@index');
});

Route::group(['prefix' => 'subs/stats',  'middleware' => 'approved'], function () {
	Route::get('/index','SubmissionStatsController@index'); 
	Route::get('/edit','SubmissionStatsController@edit'); 	
});

Route::get('/create-pdf','PdfSubmissionEmailController');

Route::group(['prefix' => 'login'], function () {
	Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
	Route::get('/{provider}/callback','Auth\LoginController@handleProviderCallback'); 	
});

Route::group(['prefix' => 'contactus'], function () {
	Route::get('/create','ContactUsController@create');
	Route::post('/send','ContactUsController@store');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::group(['prefix' => 'forms',  'middleware' => 'approved'], function () {
	Route::get('/index','FormController@index');
	Route::get('/create','FormController@create');	
	Route::post('/create','FormController@store');
	Route::get('/show/{id}','FormController@show');
	Route::get('/edit/{id}', 'FormController@edit');
	Route::post('/edit/{id}', 'FormController@updateS');
	Route::delete('/delete/{id}', 'FormController@destroy');
});

Route::get('form/download/{id}','FormAttachmentController@show');