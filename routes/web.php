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

Route::get('/', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/store', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::get('/{post}', 'App\Http\Controllers\PostController@show')->name('posts.show');
