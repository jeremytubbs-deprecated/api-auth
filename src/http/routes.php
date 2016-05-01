<?php

Route::group(['middleware' => ['api'],
    'domain' => config('api-auth.domain'),
    'prefix' => config('api-auth.prefix')], function () {
        Route::get('/', function () {
            return response()->json['api'];
        });
});