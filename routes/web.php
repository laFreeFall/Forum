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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('forum', 'ForumController@index');

    Route::post('sections', 'SectionsController@store');
    Route::get('section/{section}', 'SectionsController@show');

    Route::post('subsections', 'SubsectionsController@store');
    Route::get('subsection/{subsection}', 'SubsectionsController@show');

    Route::post('topics', 'TopicsController@store');
    Route::get('topic/{topic}', 'TopicsController@show');

    Route::post('messages', 'MessagesController@store');

    Route::get('user/{user}', 'UsersController@show');
    Route::post('rate', 'UsersController@rate');
    Route::post('unrate', 'UsersController@unrate');

    Route::get('messages', 'PrivateMessagesController@index');
});