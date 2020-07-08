<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/artist', 'ArtistController@index');
Route::get('/artist/create', 'ArtistController@create');
Route::post('/artist', 'ArtistController@store');
Route::get('/artist/{artist}/edit', 'ArtistController@edit');

Route::delete('artist/{id}', 'ArtistController@destroy');

Route::get('/album', 'AlbumController@index');
Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');

Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::post('/users', 'UsersController@store');
