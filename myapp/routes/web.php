<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/auth/login', 
'App\Http\Controllers\UserAuthController@Login');

Route::get('/user/auth/profile/{id}', 
'App\Http\Controllers\UserAuthController@Profile');