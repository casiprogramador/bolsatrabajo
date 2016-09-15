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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'client'], function () {

    Route::group(['prefix' => 'curriculum'], function () {
        //Datos Personales
        Route::get('personal_date', 'CurriculumController@showFormPersonalDate')->name('curriculum_personal_date_show');
        Route::post('personal_date', 'CurriculumController@savePersonalDate')->name('curriculum_personal_date_save');
        //Datos Profecionales
        Route::get('formation', 'CurriculumController@showFormFormation')->name('curriculum_formation_show');
        Route::post('formation', 'CurriculumController@saveFormation')->name('curriculum_formation_save');
        //Datos Experiencia
        Route::get('experience', 'CurriculumController@showFormExperience')->name('curriculum_experience_show');
        Route::post('experience', 'CurriculumController@saveExperience')->name('curriculum_experience_save');
        //Datos Idioma
        Route::get('language', 'CurriculumController@showFormLanguage')->name('curriculum_language_show');
        Route::post('language', 'CurriculumController@saveLanguage')->name('curriculum_language_save');
        //Datos Idioma
        Route::get('knowledge', 'CurriculumController@showFormKnowledge')->name('curriculum_knowledge_show');
        Route::post('knowledge', 'CurriculumController@saveKnowledge')->name('curriculum_knowledge_save');
        //Datos Preferencias de trabajo
        Route::get('preference', 'CurriculumController@showFormPreference')->name('curriculum_preference_show');
        Route::post('preference', 'CurriculumController@savePreference')->name('curriculum_preference_save');
        //Datos Preferencias de trabajo
        Route::get('profile', 'CurriculumController@showFormProfile')->name('curriculum_profile_show');
        Route::post('profile', 'CurriculumController@saveProfile')->name('curriculum_profile_save');
    });
});

Route::auth();

//Route::get('/home', 'HomeController@index');
