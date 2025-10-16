<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;

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

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita/{judul}', function ($judul) {
    return view('berita.' . strtolower(str_replace(' ', '-', $judul)));
});

Route::get('/spmb', [PpdbController::class, 'index'])->name('spmb.index');
Route::post('/ppdb/store', [PpdbController::class, 'store'])->name('ppdb.store');

route::get('/daftar-harga', function () {return view('daftar-harga');})->name('daftar-harga');
