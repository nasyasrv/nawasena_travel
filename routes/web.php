<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('nawasena');
});
Route::get('/about_us', function () {
    return view('aboutus');
});
