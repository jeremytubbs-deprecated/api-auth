<?php

Route::group(['middleware' => ['throttle:5,1'],
    'domain' => config('api-auth.domain'),
    'prefix' => config('api-auth.prefix')], function () {
    Route::post('login', 'Jeremytubbs\ApiAuth\Http\Controllers\ApiAuthController@postLogin');
});

Route::group(['middleware' => ['auth:api']], function () {

});
