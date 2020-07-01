<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome');
