<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
return view('homepage.index');
})->name('index');

Route::get('/login', function () {
    return view('login.user_login');
    })->name('login');
    