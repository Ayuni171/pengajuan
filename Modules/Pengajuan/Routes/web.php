<?php

use Modules\Pengajuan\Http\Controllers\ProsesController;
use Modules\Pengajuan\Http\Controllers\DiprosesController;
use Modules\Pengajuan\Http\Controllers\DitolakController;
use Modules\Pengajuan\Http\Controllers\SelesaiController;
use Modules\Pengajuan\Http\Controllers\PPegawaiController;
use Modules\Pengajuan\Http\Controllers\PProfilController;
use Modules\Pengajuan\Http\Controllers\Kurang1Controller;
use Modules\Pengajuan\Http\Controllers\Lebih1Controller;
use Modules\Pengajuan\Http\Controllers\PstaffoController;
use Modules\Pengajuan\Http\Controllers\MtDiprosesController;
use Modules\Pengajuan\Http\Controllers\LihatpengajuanstafController;
use Modules\Pengajuan\Http\Controllers\TambahLampiranController;
use Modules\Pengajuan\Http\Controllers\PengajuanMasukMController;
use Modules\Pengajuan\Http\Controllers\DitolakDController;
use Modules\Pengajuan\Http\Controllers\RevisiController;
use Modules\Pengajuan\Http\Controllers\EditFormController;
use Modules\Pengajuan\Http\Controllers\PengajuanBiasaController;
use Modules\Pengajuan\Http\Controllers\PengajuanProjekController;
use Modules\Pengajuan\Http\Controllers\PengajuanDinasController;
use Modules\Pengajuan\Http\Controllers\LihatPengajuanBiasaController;
use Modules\Pengajuan\Http\Controllers\LihatPengajuanDinasController;
use Modules\Pengajuan\Http\Controllers\LihatPengajuanProjekController;
use Modules\Pengajuan\Http\Controllers\HistoryController;
use Modules\Pengajuan\Http\Controllers\LampiranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('pengajuan')->group(function () {
    Route::get('/', 'PengajuanController@index');
    Route::resource('/proses', ProsesController::class);
    Route::resource('/diproses', DiprosesController::class);
    Route::resource('/ditolak', DitolakController::class);
    Route::resource('/selesai', SelesaiController::class);
    Route::resource('/ppegawai', PPegawaiController::class);
    Route::resource('/pprofil', PProfilController::class);
    Route::resource('/kurang1', Kurang1Controller::class);
    Route::resource('/lebih1', Lebih1Controller::class);
    Route::resource('/profil', PstaffoController::class);
    Route::resource('/mt_diproses', MtDiprosesController::class);
    Route::resource('/lihatpengajuanstaf', LihatpengajuanstafController::class);
    Route::resource('/tambah_lampiran', TambahLampiranController::class);
    Route::resource('/pengajuan_masukM', PengajuanMasukMController::class);
    Route::resource('/ditolak', DitolakDController::class);
    Route::resource('/revisi', RevisiController::class);
    Route::resource('/editForm', EditFormController::class);
    Route::resource('/pengajuanBiasa', PengajuanBiasaController::class);
    Route::resource('/pengajuanProjek', PengajuanProjekController::class);
    Route::resource('/pengajuanDinas', PengajuanDinasController::class);
    Route::resource('/lihatPengajuanBiasa', LihatPengajuanBiasaController::class);
    Route::resource('/lihatPengajuanDinas', LihatPengajuanDinasController::class);
    Route::resource('/lihatPengajuanProjek', LihatPengajuanProjekController::class);
    Route::resource('/History', HistoryController::class);
    Route::resource('/lampiran', LampiranController::class);
});
