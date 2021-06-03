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

Route::get('/login', 'App\Http\Controllers\LoginController@create')->name('login.create');
Route::post('/login', 'App\Http\Controllers\LoginController@store')->name('login.store');
Route::get('/register', 'App\Http\Controllers\RegisterController@create')->name('register.create');
Route::post('/register', 'App\Http\Controllers\RegisterController@store')->name('register.store');;
Route::get('/profile/{id}', 'App\Http\Controllers\ProfilesController@index')->name('profiles.show');
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');