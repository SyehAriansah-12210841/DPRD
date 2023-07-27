<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DapilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FraksiController;
use App\Http\Controllers\SekretariatController;
use App\Http\Controllers\VisitorAnggotaController;
use App\Http\Controllers\VisitorController;
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
Route::get('/', [VisitorController::class, 'home'])->name('home');
Route::prefix('/profil')->group(function () {
    Route::get('/anggota', [VisitorAnggotaController::class, 'index'])->name('all');
    Route::get('/sejarah', [VisitorController::class, 'sejarah'])->name('sejarah');
    Route::get('/kedudukan', [VisitorController::class, 'kedudukan'])->name('kedudukan');
    Route::get('/pimpinan', [VisitorController::class, 'pimpinan'])->name('pimpinan');
    Route::get('/tata-tertib', [VisitorController::class, 'tataTertib'])->name('tataTertib');
    Route::get('/{anggota:id}', [VisitorAnggotaController::class, 'show'])->name('detail');
});

Route::prefix('/akd')->group(function () {
    Route::get('/komisi/{komisi}', [VisitorController::class, 'komisiDetail'])->name('komisiDetail');
    Route::get('/komisi', [VisitorController::class, 'komisi'])->name('komisi');
    Route::get('/badan-musyawarah', [VisitorController::class, 'badanMusyawarah'])->name('badanMusyawarah');
    Route::get('/badan-anggaran', [VisitorController::class, 'badanAnggaran'])->name('badanAnggaran');
    Route::get('/badan-pembentukan-perda', [VisitorController::class, 'badanPembentukanPerda'])->name('badanPembentukanPerda');
    Route::get('/badan-kehormatan', [VisitorController::class, 'badanKehormatan'])->name('badanKehormatan');
});
Route::prefix('/fraksi')->group(function () {
    Route::get('/{fraksi:slug}', [VisitorController::class, 'fraksiDetail'])->name('fraksiDetail');
});
Route::prefix('/sekretariat')->group(function () {
    Route::get('/sejarah', [VisitorController::class, 'sejarahSekretariat'])->name('sejarahSekretariat');
    Route::get('/tupoksi', [VisitorController::class, 'tupoksiSekretariat'])->name('tupoksiSekretariat');
    Route::get('/visi-misi', [VisitorController::class, 'visimisiSekretariat'])->name('visimisiSekretariat');
    Route::get('/struktur-organisasi', [VisitorController::class, 'strukturOrganisasiSekretariat'])->name('strukturOrganisasiSekretariat');
    Route::get('/{id}', [VisitorController::class, 'sekretariatDetail'])->name('sekretariatDetail');
    Route::get('/', [VisitorController::class, 'anggotaSekretariat'])->name('anggotaSekretariat');
});
// Admin Dashboard
Route::prefix('/admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('anggota', AnggotaController::class)->parameter('anggota', 'anggota');
    Route::resource('dapil', DapilController::class);
    Route::resource('fraksi', FraksiController::class);
    Route::resource('sekretariat', SekretariatController::class)->parameter('sekretariat', 'sekretariat');
});
