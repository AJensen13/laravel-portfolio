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
    return view('pages.login');
});

Route::get('/profile', 'UserController@show');

Route::get('/chat', function () {
    return view('pages.chat');
});

Route::get('/board/{id}', 'BoardController@show');

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/comment', 'CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
