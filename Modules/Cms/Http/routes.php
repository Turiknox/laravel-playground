<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Cms\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');

    Route::post('/login', 'AdminController@login');
});
