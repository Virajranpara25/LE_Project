<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.index');
})->name('index');

Route::get('/login', function () {
    return view('Login_Registers.login');
})->name('login');

Route::get('/register', function () {
    return view('Login_Registers.Register');
})->name('register');
