<?php

Route::get('/', 'QuestController@index')->name('/');

Route::post('/quest', 'QuestController@post')->name('quest');
