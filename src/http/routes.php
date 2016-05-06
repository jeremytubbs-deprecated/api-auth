<?php

Route::group(['domain' => config('api-auth.domain'),
    'prefix' => config('api-auth.prefix')], function () {

    Route::group(['middleware' => ['api-auth']], function () {
        Route::post('login', 'Jeremytubbs\ApiAuth\Http\Controllers\ApiAuthController@postLogin');
        Route::post('register', 'Jeremytubbs\ApiAuth\Http\Controllers\ApiAuthController@postRegister');
    });
});
