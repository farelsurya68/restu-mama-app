<?php

use Illuminate\Support\Facades\Route;

// Jalur untuk halaman utama / beranda
Route::get('/', function () {
    return view('home'); // Ini akan memanggil resources/views/home.blade.php
});