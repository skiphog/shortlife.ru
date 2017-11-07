<?php

Route::get('/', 'QuestController@index')
    ->name('/');

Route::get('/login', 'EndController@login')
    ->name('login');

Route::get('/finish', 'EndController@finish')
    ->name('finish');

Route::post('/post', 'QuestController@post')
    ->name('post');
