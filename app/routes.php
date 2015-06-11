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
})->before('loged');

// Route::get('profile', function()
// {
// 	return View::make('profile');
// })->before('Auth');

Route::get('blog', function()
{
	return View::make('blog');
});

// Route::get('posts', function()
// {
// 	return View::make('posts');
// });

Route::get('postProfile', function()
{
	return View::make('postProfile');
});

Route::get('posts/search/{url}', function($url)
{

	return View::make('search')->with('url',$url);
});



Route::controller('register','RegisterController');

Route::post('login/ajax','registerController@postAjaxRegister');

Route::post('login', 'UserController@postLogin');

Route::get('show', 'UserController@getLogin')->before('auth');

Route::get('logout', 'UserController@getLogout');

Route::controller('create','BlogController');

Route::post('blog','BlogController@postBlog');

Route::get('show/{url}',array('uses'=>'postsController@getIndex','as' => 'post2'));

Route::post('posts/{url}',array('uses'=>'postsController@postPosts', 'as' => 'posts1'));

Route::get('posts/{url}/{bid}',array('uses'=>'PostsController@getPosts', 'as' => 'posts'));

Route::post('posts/search/{url}',array('uses'=>'postsController@postSearch','as' => 'search'));

Route::post('comment/{url}/{pid}',array('uses'=>'commentController@postComment', 'as' => 'comment'));

Route::post('delete/{bid}',array('uses'=>'userController@postDeleteBlog', 'as' => 'delete'));

Route::post('delete/{url}/{bid}',array('uses'=>'PostsController@postDelete', 'as' => 'delete'));

Route::post('deleteCom/{url}/{cid}',array('uses'=>'commentController@postDelete', 'as' => 'deleteCom'));

Route::post('like/{url}/{pid}',array('uses'=>'PostsController@postLike', 'as' => 'like'));





