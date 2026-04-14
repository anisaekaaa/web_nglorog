<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/penduduk', function () {
    return view('detail_penduduk');
});

Route::get('/wilayah', function () {
    return view('detail_wilayah');
});

Route::get('/faskes', function () {
    return view('detail_faskes');
});

Route::get('/pendidikan/tk', function () {
    return view('tk'); 
});

Route::get('/pendidikan/sd', function () {
    return view('sd'); 
});

Route::get('/pendidikan/menengah', function () {
    return view('menengah'); 
});