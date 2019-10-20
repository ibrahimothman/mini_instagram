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

Auth::routes();

//------------------post------------------------
Route::get('/p/create','PostController@create');
Route::post('/p','PostController@store');
Route::get('/p/{post}','PostController@show');

//-----------------profile-----------------
Route::get('/profile/{user}', 'ProfileController@index')->name('home');
Route::get('/profile/{user}/edit', 'ProfileController@edit');
Route::patch('/profile/{user}', 'ProfileController@update');

//----------------follow--------------
Route::post('/follow/{user}', 'FollowsController@store');
