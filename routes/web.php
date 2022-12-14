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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['auth']], function(){
Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::get('/user','UserController@index');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}','PostController@update');
Route::get('/posts/{post}', 'PostController@show');
Route::delete('/posts/{post}', 'PostController@delete');
Route::post('/posts','PostController@store');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
