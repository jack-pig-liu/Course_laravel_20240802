<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthUserAdminMiddleware;
use Socialite;

Route::get('/google/auth', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/googlelogin', function () {
    $user = Socialite::driver('google')->stateless()->user();
    dd($user);
});

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
    Route::get('manage', 'App\Http\Controllers\MerchandiseController@MerchandiseManage')->name('merchandise.manage');
    Route::get('create', 'App\Http\Controllers\MerchandiseController@MerchandiseCreate')->middleware(AuthUserAdminMiddleware::class);
    
    Route::group(['prefix' => '{merchandise_id}'], function () {
        Route::get('edit', 'App\Http\Controllers\MerchandiseController@MerchandiseEdit')->middleware(AuthUserAdminMiddleware::class);
        Route::put('/', 'App\Http\Controllers\MerchandiseController@MerchandiseEditProcess');
        Route::get('delete', 'App\Http\Controllers\MerchandiseController@MerchandiseDelete')->middleware(AuthUserAdminMiddleware::class);
    });
});

