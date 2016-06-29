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

Route::group(['middleware' => 'auth'], function () {

	Route::get('/', function () {
	    return view('admin.index');
	});

	Route::get('/index',function(){
		return view('admin.index');
	});

	Route::get('/usermain',function(){
		return view('admin.privs.usermain');
	});

	Route::get('/privmain',function(){
		return view('admin.privs.privmain');
	});

	Route::get('/rolemain',function(){
		return view('admin.privs.rolemain');
	});

	Route::get('/profilemain',function(){
		return view('admin.human.profilemain');
	});

	Route::get('/pwdmain',function(){
		return view('admin.human.pwdmain');
	});

});


Route::auth();

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');