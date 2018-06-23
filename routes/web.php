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

Route::group(['middleware' => 'admin'], function(){
	Route::get('classroom/pdf', 'ClassroomController@pdf');
	// Route::get('articles/excel', 'ArticleController@excel');
	// Route::get('categories/pdf', 'CategoryController@pdf');
	// Route::get('categories/excel', 'CategoryController@excel');
	Route::get('users/pdf', 'UserController@pdf');
	// Route::get('users/excel', 'UserController@excel');
	// Route::resource('category', 'CategoryController');
	Route::get('users/search', 'UserController@search');
	Route::get('users/ajaxsearch', 'UserController@ajaxsearch');
	Route::get('classroom/search', 'ClassroomController@search');
	Route::get('classroom/ajaxsearch', 'ClassroomController@ajaxsearch');
	// Route::get('departments', 'HomeController@departments');
	// Route::get('municipalities', 'HomeController@municipalities');
	Route::resource('user', 'UserController');
	Route::resource('classroom', 'ClassroomController');
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



/*USAR DEL PROYECTO LARAVEL
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	//$arts = App\Article::all();
// 	$arts = App\Article::orderBy('id', 'desc')->take(30)->get();
// 	$slides = App\Article::orderBy('id', 'desc')->take(30)->get();
//     return view('welcome')->with('slides', $slides)
//     					  ->with('arts', $arts);
// });
//

// Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
// Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
//////ESTOS SON POR SI ACASO////// Route::get('/social/redirect/google', 'Auth\SocialController@getSocialRedirect')->name('redirectSocialite');
//////ESTOS SON POR SI ACASO////// Route::get('/social/handle/google', 'Auth\SocialController@getSocialHandle')->name('handleSocialLite');
/*role:instructor*/
// Route::get('/mycontent', 'InstructorController@mycontent');
// Route::get('/mycontent/create', 'InstructorController@create');
// Route::post('mycontent', 'InstructorController@store');
// Route::get('mycontent/{id}', 'InstructorController@show');
// Route::get('mycontent/{id}/edit', 'InstructorController@edit');
// Route::put('mycontent/{id}', 'InstructorController@update');
// Route::delete('mycontent/{id}', 'InstructorController@destroy');
