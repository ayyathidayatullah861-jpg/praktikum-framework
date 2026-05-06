<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

/* ===============================================
   LANDING PAGES (Public)
   =============================================== */
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/program-kerja', [PageController::class, 'programs'])->name('programs');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

/* ===============================================
   MAHASISWA AUTH — Cookie Based
   =============================================== */
Route::get('/login', [AuthController::class, 'showMahasiswaLogin'])->name('mahasiswa.login');
Route::post('/login', [AuthController::class, 'mahasiswaLogin'])->name('mahasiswa.login.post');
Route::get('/dashboard', [AuthController::class, 'mahasiswaDashboard'])->name('mahasiswa.dashboard');
Route::get('/logout', [AuthController::class, 'mahasiswaLogout'])->name('mahasiswa.logout');

/* ===============================================
   ADMIN AUTH — Session Based
   =============================================== */
Route::get('/admin/login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login.post');
Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
