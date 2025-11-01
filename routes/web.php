<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminController;

// Halaman utama
Route::get('/', fn() => view('welcome'))->name('welcome');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/check-absen', [App\Http\Controllers\AbsensiController::class, 'checkAbsen']);


Route::get('/riwayat', [AbsensiController::class, 'riwayat'])->name('riwayat');

Route::get('/izin', [IzinController::class, 'index'])->name('izin');
Route::post('/izin', [IzinController::class, 'store'])->name('izin.store');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::post('/admin/magang/status/{id}', [MagangController::class, 'updateStatus'])->name('admin.magang.status');

// Autentikasi
Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Dashboard umum (setelah login)
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Aksi absen (khusus magang)
    Route::post('/absen-masuk', [AbsensiController::class, 'absenMasuk'])->name('absen.masuk');
    Route::post('/absen-keluar', [AbsensiController::class, 'absenKeluar'])->name('absen.keluar');

    // Admin area
    Route::prefix('admin')->group(function() {
        Route::get('dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
        // Route::resource('/admin/magang', [MagangController::class, '']);
        Route::get('/admin/laporan', [LaporanController::class, 'index'])->name('admin.laporan.index');
    });
});
Route::middleware(['auth'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// --- IZIN / SAKIT ---
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/izin', [App\Http\Controllers\Admin\IzinController::class, 'index'])->name('admin.izin.index');
    Route::post('/izin/{id}/approve', [App\Http\Controllers\Admin\IzinController::class, 'approve'])->name('admin.izin.approve');
    Route::post('/izin/{id}/reject', [App\Http\Controllers\Admin\IzinController::class, 'reject'])->name('admin.izin.reject');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/admin/feedback', [App\Http\Controllers\FeedbackController::class, 'index'])->name('admin.feedback.index');
    Route::delete('/feedback/{id}', [App\Http\Controllers\FeedbackController::class, 'destroy'])->name('admin.feedback.destroy');
});

Route::resource('/admin/magang', MagangController::class);

Route::get('/admin/absensi', [AdminController::class, 'absensi'])->name('admin.absensi');

