<?php

use App\Http\Controllers\pages\PostMain;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/publicacion',[PostMain::class, 'index'])->name('publicacion-main');
