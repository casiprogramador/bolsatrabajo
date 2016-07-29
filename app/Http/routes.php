<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'client'], function () {
    Route::get('register', function ()    {
        return view('client.register');
    });
    Route::group(['prefix' => 'curriculum'], function () {
        Route::get('personal_date', 'CurriculumController@showFormPersonalDate')->name('curriculum_personal_date');
    });
});

Route::auth();

//Route::get('/home', 'HomeController@index');
