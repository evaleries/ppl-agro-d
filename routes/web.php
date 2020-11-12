<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'verify' => true,
    'reset' => true,
]);

Route::get('/home', 'HomeController@index')->name('home');
