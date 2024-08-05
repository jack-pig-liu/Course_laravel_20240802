<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('signup', 'App\Http\Controllers\UserAuthController@SignUp')->name('user.auth.signup');   
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');   
        
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login')->name('user.auth.login');;
        Route::post('login', 'App\Http\Controllers\UserAuthController@LoginProcess');

        Route::get('signout', 'App\Http\Controllers\UserAuthController@SignOut')->name('user.auth.signout');   
        
        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@Profile');
    });
});

Route::group(['prefix' => 'merchandise'], function () {
    Route::get('{merchandise_id}', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
});

