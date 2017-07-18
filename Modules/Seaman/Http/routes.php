<?php

Route::group(['middleware' => 'web', 'prefix' => 'seaman', 'namespace' => 'Modules\Seaman\Http\Controllers'], function()
{
    Route::get('/', 'SeamanController@index');
});
