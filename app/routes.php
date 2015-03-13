<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','UsersController@index');
Route::group(array('before' => 'auth'),function(){
	Route::get('/adminpage','PagesController@admin');
	Route::post('/createcompany','PagesController@createCompany');
});
Route::get('/logout','UsersController@logout');
Route::post('/signup','UsersController@create');
Route::post('/login','UsersController@login');

