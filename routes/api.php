<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnualLeavelController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Membuat permohonan cuti baru
Route::post('/annual-leaves', [AnnualLeavelController::class, 'store']);

// Menampilkan list permohonan cuti
Route::get('/annual-leaves', [AnnualLeavelController::class, 'index']);

// Menampilkan satu data permohonan izin
Route::get('/annual-leaves/{id}', [AnnualLeavelController::class, 'show']);





