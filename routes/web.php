<?php

Route::get('/blog','blogController@index');

Route::get('/blog/create','blogController@create');
Route::post('/blog','blogController@store');

Route::get('/blog/{id}','blogController@show');

Route::get('/blog/{id}/edit','blogController@edit');
Route::put('/blog/{id}','blogController@update');

Route::delete('/blog/{id}','blogController@delete');
