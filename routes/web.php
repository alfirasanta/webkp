<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminLayananController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminPelangganController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PelangganLaporan;
use App\Http\Controllers\PelangganLayananController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pelanggan.index');
// });
Route::get('/', [PelangganController::class, 'index']);
Route::resource('pelanggan', PelangganController::class);
Route::get('/filter/{id_kategori}', [PelangganController::class, 'filterByCategory']);
Route::resource('pelangganlaporan', PelangganLaporan::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('adminkategori', AdminKategoriController::class);
    Route::resource('adminlayanan', AdminLayananController::class);
    Route::resource('adminlaporan', AdminLaporanController::class);
    Route::resource('adminpelanggan', AdminPelangganController::class);
});

// Route::middleware(['middleware' => 'guest'])->group(function () {
//     Route::get('/user', function () {
//         return view('pelanggan');
//     })->name('user');
//     // Route::resource('pelanggan', PelangganController::class);
//     Route::resource('pelangganlaporan', PelangganLaporan::class);



// Route::post('/layananpelanggan/filter', [PelangganLayananController::class, 'filterByCategory']);
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
