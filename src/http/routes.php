<?php

Route::group(['domain' => config('api-auth.domain'),
    'prefix' => config('api-auth.prefix')], function () {

    Route::group(['middleware' => ['api']], function () {
        Route::post('login', 'Jeremytubbs\ApiAuth\Http\Controllers\ApiAuthController@postLogin');
    });

    Route::group(['middleware' => ['auth:api']], function () {

    });
});
