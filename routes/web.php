<?php

use Illuminate\Support\Facades\Route;



Route::resource('todos', 'TodoController');




Route::get('/', function () {
    return view('welcome');
});