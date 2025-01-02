<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.homepage');
});

Route::get('/recomendations', function () {
    return view('layouts.recomendations');
});

Route::get('/detail-bph', function () {
    return view('details.bph');
});
