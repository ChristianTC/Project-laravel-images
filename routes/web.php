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

Route::get('/', 'PageController@posts' );
Route::get('blog/{post}', 'PageController@post')->name('post');

//CAMARAS
Route::get('/camaralist', 'PageController@camaras' );
Route::get('camara/{camara}', 'PageController@camara')->name('camara');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'Backend\PostController')
    ->middleware('auth')
    ->except('show');

Route::resource('camaras', 'Backend\CamaraController')
    ->middleware('auth')
    ->except('show');