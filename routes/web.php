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
    return view('auth/login');
});
Route::get('pruebaFinal', 'HomeController@pruebaFinal');

Route::group(['middleware' => 'admin'], function(){
	Route::get('users/pdf', 'UserController@pdf');
	Route::get('users/excel', 'UserController@excel');
	Route::get('users/search', 'UserController@search');
	Route::get('users/ajaxsearch', 'UserController@ajaxsearch');
	Route::get('classroom/pdf', 'ClassroomController@pdf');
	Route::get('classroom/excel', 'ClassroomController@excel');
	Route::get('classroom/search', 'ClassroomController@search');
	Route::get('classroom/ajaxsearch', 'ClassroomController@ajaxsearch');
	Route::get('programs/pdf', 'ProgramController@pdf');
	Route::get('programs/excel', 'ProgramController@excel');
	Route::get('programs/search', 'ProgramController@search');
	Route::get('programs/ajaxsearch', 'ProgramController@ajaxsearch');
	Route::get('records/pdf', 'RecordController@pdf');
	Route::get('records/excel', 'RecordController@excel');
	Route::get('records/search', 'RecordController@search');
	Route::get('records/ajaxsearch', 'RecordController@ajaxsearch');
	Route::get('abilities/pdf', 'AbilitiesController@pdf');
	Route::get('abilities/excel', 'AbilitiesController@excel');
	Route::get('abilities/search', 'AbilitiesController@search');
	Route::get('abilities/ajaxsearch', 'AbilitiesController@ajaxsearch');
	Route::get('municipalities/pdf', 'MunicipalitiesController@pdf');
	Route::get('municipalities/excel', 'MunicipalitiesController@excel');
	Route::get('municipalities/search', 'MunicipalitiesController@search');
	Route::get('municipalities/ajaxsearch', 'MunicipalitiesController@ajaxsearch');
    Route::get('/programaFormacionSeleccionado', 'RecordController@programaFormacionSeleccionado');
    Route::get('/competencias', 'RecordController@competencias');
    Route::get('/descargarExcel/{idRecord}', 'RecordController@descargarPrograma')->name('descargarExcel.descargarPrograma');

    Route::get('/validacion', 'RecordController@validacion');
    Route::get('/validacionInstructor', 'RecordController@validacionInstructor');
    


    Route::get('/users/info', 'UserController@info');
    Route::put('miuser/{iduser}', 'UserController@editarMiInfo');
    Route::get('/horario', 'UserController@horario');

	Route::resource('user', 'UserController');
	Route::resource('abilities', 'AbilitiesController');
	Route::resource('municipalities', 'MunicipalitiesController');
	Route::resource('classroom', 'ClassroomController');
	Route::resource('program', 'ProgramController');
	Route::resource('record', 'RecordController');
});

	// Authentication Routes...
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('mydata', 'MydataController');
