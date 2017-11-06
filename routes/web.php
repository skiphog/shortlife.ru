<?php

Route::get('/', 'QuestController@index')
    ->name('/')
    ->middleware('token');

Route::post('/quest', 'QuestController@post')
    ->name('quest');
