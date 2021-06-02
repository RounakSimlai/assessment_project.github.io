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
Route::get('/', function () {
    return view('index');
});

Route::get('/login', 'App\Http\Controllers\LoginController@create');
Route::get('/login', 'App\Http\Controllers\LoginController@store');
Route::get('/register', 'App\Http\Controllers\RegisterController@create');
Route::get('/register', 'App\Http\Controllers\RegisterController@store');
Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index');