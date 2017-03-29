<?php

Route::get('/','linksController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/submit', 'linksController@show');

Route::resource('/themes', 'ThemeController');

//Route::post('/submit','linksController@store'); To me: No longer using this
