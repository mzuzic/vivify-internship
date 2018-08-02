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

Route::get('/', 'HomeController@getView');

Route::get('/hello/{name?}', 'HomeController@getHello');

Route::middleware('guest')->get('/login', 'HomeController@showLogin');

Route::middleware('guest')->post('/loginn', 'Auth\LoginController@login');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout'); 

Route::get('/signup', 'HomeController@showSignUp');

Route::post('/register', 'Auth\RegisterController@register');