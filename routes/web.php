<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
});

Route::get('/jurusan/{nama}', function ($nama) {
    return view('jurusan.' . strtolower($nama));
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/yayasan', function () {
    return view('yayasan');
});

Route::get('/sekolah', function () {
    return view('sekolah');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/ekstrakurikuler', function () {
    return view('ekstrakurikuler');
});