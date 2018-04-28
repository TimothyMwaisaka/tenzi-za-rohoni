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

Route::get('/', 'HymnController@index');
Route::get('/add-songs', 'HymnController@create');
Route::get('view-songs/{id}' , ['as' => 'view-songs', 'uses' => 'HymnController@show']);
Route::post('/add-songs', 'HymnController@store');
Route::get('/edit-songs/{id}', 'HymnController@edit');
Route::post('/edit-songs/{id}', 'HymnController@update');
Route::get('users', [
    'as' => 'users',
    'uses' => 'UserController@index'
]);
Route::get('users/delete/{id}', [
    'as' => 'users.delete',
    'uses' => 'UserController@destroy',
]);

Route::get('song/delete/{id}', 'HymnController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
