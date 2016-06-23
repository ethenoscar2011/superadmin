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

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/index',function(){
	return view('admin.index');
});

Route::get('/login',function(){
	return view('admin.login');
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

Route::get('/logout',function(){
	return redirect('/login');
});

Route::get('/profilemain',function(){
	return view('admin.human.profilemain');
});

Route::get('/pwdmain',function(){
	return view('admin.human.pwdmain');
});
Route::auth();

Route::get('/home', 'HomeController@index');
