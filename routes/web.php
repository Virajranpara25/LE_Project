<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/login', function () {
    return view('Login_Registers.login');
    })->name('login');
?>