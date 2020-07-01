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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@register');

Route::get('/welcome', 'AuthController@welcome');

Route::post('/welcome', 'AuthController@register_post');