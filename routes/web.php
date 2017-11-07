<?php

Route::get('/', 'QuestController@index')
    ->name('/');

Route::post('/quest', 'QuestController@post')
    ->name('quest');

Route::get('/finish', 'EndController@finish')
    ->name('finish');

Route::get('/login', 'EndController@login')
    ->name('login');
