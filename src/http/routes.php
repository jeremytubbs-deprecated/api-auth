<?php

Route::group(['middleware' => ['auth:api', 'throttle']], function() {
	$domain = '';
    $prefix = 'api/v1';
    Route::group(['domain' => $domain, 'prefix' => $prefix], function () {

    });
});