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

Route::get('home', function()
{
	return View::make('home');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::get('profile', function()
{
	return View::make('profile');
})->before('Auth');

Route::get('blog', function()
{
	return View::make('blog');
});



Route::controller('register','RegisterController');

Route::post('login', 'UserController@postLogin');
Route::get('show', 'UserController@getLogin');

Route::get('logout', 'UserController@getLogout');

Route::controller('create','BlogController');

Route::post('blog','BlogController@postBlog');

Route::controller('show/{$url}','postsController');
