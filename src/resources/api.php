<?php

use App\Http\Controllers\Api\ProdiApiController;
use App\Http\Controllers\Api\DosenApiController;
use App\Http\Controllers\Api\MahasiswaApiController;
use App\Http\Controllers\Api\MatakuliahApiController;
use Illuminate\Support\Facades\Route;

// Di routes/api.php
Route::middleware('fakultas.auth')->group(function () {
    Route::get('/prodi', [ProdiApiController::class, 'index']);
    Route::get('/mahasiswa', [MahasiswaApiController::class, 'index']);
    Route::get('/matakuliah', [MatakuliahApiController::class, 'index']);
    Route::get('/dosen', [DosenApiController::class, 'index']);
});