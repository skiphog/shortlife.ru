<?php

Route::get('/', 'QuestController@index')
    ->name('/')
    ->middleware(['token', 'quest.no']);

Route::post('/quest', 'QuestController@post')
    ->name('quest');

///////

Route::get('/finish', function () {
    return view('quest.finish');
})
    ->name('finish')
    ->middleware(['token', 'quest.finish']);

Route::get('/login', function () {
    return view('quest.login');
})
    ->name('login')
    ->middleware(['token', 'quest.login']);
