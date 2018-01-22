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
Route::get('/posts/home','PostsController@index');


Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/search', 'PostsController@search');

Route::get('/posts/profile', 'PostsController@userProfile');

Route::get('/posts/{post}', 'PostsController@show');


Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'PostsController@index');


    
   
