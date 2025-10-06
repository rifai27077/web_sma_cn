<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/jurusan/{nama}', function ($nama) {
    return view('jurusan.' . strtolower($nama));
});