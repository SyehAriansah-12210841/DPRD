<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DapilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FraksiController;
use App\Http\Controllers\VisitorAnggotaController;
use App\Http\Controllers\VisitorHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Visitor
Route::get('/', [VisitorHomeController::class, 'home'])->name('home');
Route::prefix('/profil')->group(function () {
    Route::get('/anggota', [VisitorAnggotaController::class, 'index'])->name('all');
    Route::get('/sejarah', [VisitorHomeController::class, 'sejarah'])->name('sejarah');
    Route::get('/kedudukan', [VisitorHomeController::class, 'kedudukan'])->name('kedudukan');
    Route::get('/pimpinan', [VisitorHomeController::class, 'pimpinan'])->name('pimpinan');
    Route::get('/tata-tertib', [VisitorHomeController::class, 'tataTertib'])->name('tataTertib');
    Route::get('/{anggota:id}', [VisitorAnggotaController::class, 'show'])->name('detail');
});

Route::prefix('/akd')->group(function () {
    Route::get('/komisi', [VisitorHomeController::class, 'komisi'])->name('komisi');
    Route::get('/Badan-Musyawarah', [VisitorHomeController::class, 'BadanMusyawarah'])->name('BadanMusyawarah');
    Route::get('/Badan-Anggaran', [VisitorHomeController::class, 'BadanAnggaran'])->name('BadanAnggaran');
    Route::get('/Badan-Pembentukan-Perda', [VisitorHomeController::class, 'BadanPembentukanPerda'])->name('BadanPembentukanPerda');
    Route::get('/Badan-Kehormatan', [VisitorHomeController::class, 'BadanKehormatan'])->name('BadanKehormatan');
});
Route::prefix('/fraksi')->group(function () {
    Route::get('/{fraksi:slug}', [VisitorHomeController::class, 'fraksiDetail'])->name('fraksiDetail');
});
// Admin Dashboard
Route::prefix('/admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('anggota', AnggotaController::class)->parameter('anggota', 'anggota');
    Route::resource('dapil', DapilController::class);
    Route::resource('fraksi', FraksiController::class);
});
