<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index']);

Route::get('/login-page', [App\Http\Controllers\Auth\AuthController::class, 'login_page'])->name('login-page');
Route::get('/register-page', [App\Http\Controllers\Auth\AuthController::class, 'register_page'])->name('register-page');
Route::get('/register-page-admin', [App\Http\Controllers\Auth\AuthController::class, 'register_page_admin'])->name('register-page');
Route::post('/register-action', [App\Http\Controllers\Auth\AuthController::class, 'register']);
Route::post('/register-admin-action', [App\Http\Controllers\Auth\AuthController::class, 'register_admin']);
Route::post('/login-action', [App\Http\Controllers\Auth\AuthController::class, 'login']);
Route::post('/logout-action', [App\Http\Controllers\Auth\AuthController::class, 'logout']);


Route::get('/user-table-page', function () {
    return view('data-management.user-pages.user-table');
});
Route::get('/user-add-page', function () {
    return view('data-management.user-pages.user-add');
});
Route::get('/user-edit-page', function () {
    return view('data-management.user-pages.user-edit');
});
Route::get('/pembaca-table-page', function () {
    return view('data-management.pembaca-pages.pembaca-table');
});

Route::get('/book-page', function () {
    return view('data-management.book-pages.book');
});
Route::get('/book-detail-page', function () {
    return view('data-management.book-pages.book-detail');
});
Route::get('/personal-collections-page', function () {
    return view('data-management.personal-collections-pages.personal-collections');
});


Route::get('/peminjaman-page', function () {
    return view('data-management.peminjaman-pages.peminjaman-tables');
});


Route::middleware(['auth', 'adminstaff'])->group(function () {
    Route::get('/dashboard-admin-page', [DashboardController::class, 'index']);
    Route::resource('pembaca', App\Http\Controllers\PembacaController::class);
    Route::get('/hapus-pembaca/{id}', [App\Http\Controllers\PembacaController::class, 'destroy']);
    Route::get('/delete-peminjaman/{id}', [App\Http\Controllers\PeminjamanController::class, 'destroy'])->name('delete-peminjaman');
    Route::post('/hapus-status/{id}', [App\Http\Controllers\PeminjamanController::class, 'hapus_status']);
    Route::post('/ubah-status/{id}', [App\Http\Controllers\PeminjamanController::class, 'ubah_status']);
    Route::get('/export-peminjaman-no-status', [App\Http\Controllers\PeminjamanController::class, 'export_peminjamannostatus']);
    Route::get('/export-peminjaman-dipinjam', [App\Http\Controllers\PeminjamanController::class, 'export_peminjamandipinjam']);
    Route::get('/export-peminjaman-dikembalikan', [App\Http\Controllers\PeminjamanController::class, 'export_peminjamandikembalikan']);
    Route::get('/export-peminjaman-all', [App\Http\Controllers\PeminjamanController::class, 'export_peminjaman']);
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::get('/delete-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('delete-kategori');
    Route::get('/delete-buku/{id}', [App\Http\Controllers\BukuController::class, 'destroy'])->name('delete-buku');
    Route::put('/buku-update/{id}', [App\Http\Controllers\BukuController::class, 'update']);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::get('delete-user-action/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
    Route::get('user-export', [App\Http\Controllers\UserController::class, 'export_user']);
});
Route::middleware(['auth'])->group(function () {
    Route::resource('buku', App\Http\Controllers\BukuController::class);
    Route::resource('peminjaman', App\Http\Controllers\PeminjamanController::class);
    Route::resource('ulasan', App\Http\Controllers\UlasanController::class);
    Route::put('/profile-update/{id}', [App\Http\Controllers\UserController::class, 'profile_update']);
    Route::get('/profile', function () {
        return view('data-management.user-pages.profiles');
    });
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::resource('koleksi', App\Http\Controllers\KoleksiBukuController::class);
    Route::post('/peminjaman-steptwo', [App\Http\Controllers\PeminjamanController::class, 'peminjaman_steptwo']);
    Route::get('/hapus-koleksi/{id}', [App\Http\Controllers\KoleksiBukuController::class, 'destroy']);
    Route::get('/hapus-ulasan/{id}', [App\Http\Controllers\UlasanController::class, 'destroy']);
});
