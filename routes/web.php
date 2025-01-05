<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.homepage');
});

Route::get('/recomendations', function () {
    return view('layouts.recomendations');
});

Route::get('/bidang-program-kerja', function () {
    return view('layouts.field_programs');
});

// Bidang
Route::get('/detail-bph', function () {
    return view('details.bph');
});

Route::get('/detail-pi', function () {
    return view('details.pi');
});

Route::get('/detail-re', function () {
    return view('details.re');
});

Route::get('/detail-mikat', function () {
    return view('details.mikat');
});

Route::get('/detail-kwu', function () {
    return view('details.kwu');
});

Route::get('/detail-sosmas', function () {
    return view('details.sosmas');
});

//Program Kerja
Route::get('/program-makrab', function () {
    return view('programs.makrab');
});
