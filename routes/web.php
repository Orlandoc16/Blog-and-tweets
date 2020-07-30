<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entries/create', 'EntryController@create')->name('create');
Route::post('/entries', 'EntryController@strore')->name('entries');
