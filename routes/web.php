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

Use App\Task; 

Route::get('/', function(){
    return view('welcome');
});

// The route to the assisgnment 1 page
Route::get('/games', 'GamesController@Show');

Route::get('/posts', 'PostsController@index');
// Controller => PostsController
// Eloquent Model => Post
// Migration => create_posts_table
// Table => posts

Route::post('/posts', 'PostsController@store');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');