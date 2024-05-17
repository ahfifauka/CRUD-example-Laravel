<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

// 127.0.0.1:8000
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::resource('jurusan', JurusanController::class);
Route::resource('pendaftaran', PendaftaranController::class);
