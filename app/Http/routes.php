<?php

Route::get('/', 'TasksController@index');

Route::post('/task', 'TasksController@addTask');

Route::delete('task/{task}', 'TasksController@deleteTask');