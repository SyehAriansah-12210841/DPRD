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
    Route::get('/pimpinan', [VisitorController::class, 'pimpinan'])->name('pimpinan');
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
    Route::get('/tupoksi', [VisitorController::class, 'tupoksiSekretariat'])->name('tupoksiSekretariat');
    Route::get('/struktur-organisasi', [VisitorController::class, 'strukturOrganisasiSekretariat'])->name('strukturOrganisasiSekretariat');
    Route::get('/pejabat-struktural', [VisitorController::class, 'anggotaSekretariat'])->name('anggotaSekretariat');
    Route::get('/{id}', [VisitorController::class, 'sekretariatDetail'])->name('sekretariatDetail');
});
Route::prefix('/pelayanan-informasi')->group(function () {
    Route::get('/visi-misi-bupati', [VisitorController::class, 'visiMisiBupati'])->name('visiMisiBupati');
    Route::get('/motto-pelayanan', [VisitorController::class, 'mottoPelayanan'])->name('mottoPelayanan');
    Route::get('/maklumat-pelayanan', [VisitorController::class, 'maklumatPelayanan'])->name('maklumatPelayanan');
});
Route::prefix('/ppid')->group(function () {
    Route::get('/profil-singkat-ppid', [VisitorController::class, 'profilSingkatPpid'])->name('profilSingkatPpid');
    Route::get('/sk-ppid', [VisitorController::class, 'skppid'])->name('skppid');
    Route::get('/visi-misi', [VisitorController::class, 'visiMisi'])->name('visiMisi');
    Route::get('/tugas-fungsi-ppid', [VisitorController::class, 'tugasFungsiPpid'])->name('tugasFungsiPpid');
    Route::get('/standar-pelayanan', [VisitorController::class, 'standarPelayanan'])->name('standarPelayanan');
    Route::get('/struktur-organisasi', [VisitorController::class, 'strukturOrganisasi'])->name('strukturOrganisasi');
    Route::get('/jadwal-pelayanan', [VisitorController::class, 'jadwalPelayanan'])->name('jadwalPelayanan');
    Route::get('/maklumat-pelayanan', [VisitorController::class, 'maklumatPelayanan'])->name('maklumatPelayananPpid');
    Route::get('/kumpulan-peraturan-keterbukaan-informasi', [VisitorController::class, 'kumpulanPeraturanKeterbukaanInformasi'])->name('kumpulanPeraturanKeterbukaanInformasi');
    Route::get('/dokumen-sop', [VisitorController::class, 'dokumenSop'])->name('dokumenSop');
    Route::get('/formulir-permohonan', [VisitorController::class, 'formulirPermohonan'])->name('formulirPermohonan');
    Route::get('/daftar-informasi-publik', [VisitorController::class, 'daftarInformasiPublik'])->name('daftarInformasiPublik');
    Route::get('/form-permohonan-online', [VisitorController::class, 'formulirPermohonanOnline'])->name('formulirPermohonanOnline');
});
// Admin Dashboard
Route::prefix('/admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('anggota', AnggotaController::class)->parameter('anggota', 'anggota');
    Route::resource('dapil', DapilController::class);
    Route::resource('fraksi', FraksiController::class);
    Route::resource('sekretariat', SekretariatController::class)->parameter('sekretariat', 'sekretariat');
});
