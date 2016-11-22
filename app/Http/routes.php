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

Route::group(['prefix' => 'company'], function () {
	Route::get('index', 'CompanyController@index')->name('company_index');
	Route::get('register', 'CompanyController@showFormRegister')->name('company_register_show');
	Route::post('register', 'CompanyController@saveFormRegister')->name('company_register_save');
	Route::get('payment', 'CompanyController@payment')->name('company_payment');
});
Route::group(['prefix' => 'candidate'], function () {
	Route::get('index', 'CandidateController@index')->name('candidate_index');
});
Route::group(['prefix' => 'admin'], function () {
	Route::get('index', 'AdminController@index')->name('admin_index');
	Route::get('paymentplan', 'PaymentplanController@index')->name('paymentplan_index');
	Route::get('paymentplan/create', 'PaymentplanController@create')->name('paymentplan_create');
	Route::post('paymentplan', 'PaymentplanController@store')->name('paymentplan_store');
	Route::get('paymentplan/company', 'PaymentplanController@company')->name('paymentplan_company');
	Route::post('paymentplan/company', 'PaymentplanController@companyStore')->name('paymentplan_company_store');
});
Route::auth();
Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login')->name('admin_auth');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

    Route::get('/admin', 'AdminController@index');

});  
//Route::get('/home', 'HomeController@index');
