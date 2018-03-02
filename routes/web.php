<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/register', 'RegistrationController@create');
Route::post('/register/create', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');