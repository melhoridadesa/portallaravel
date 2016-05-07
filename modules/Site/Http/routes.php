<?php

Route::group(['middleware' => 'web', 'prefix' => '/', 'namespace' => 'Modules\Site\Http\Controllers'], function()
{
	Route::get('/', 'SiteController@index');
	Route::get('/quem-somos', 'SiteController@quemsomos');
});