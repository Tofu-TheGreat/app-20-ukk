<?php

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

Route::get('/', function () {
    return view('landing-page.index');
});

Route::get('/login-page', [App\Http\Controllers\Auth\AuthController::class, 'login_page'])->name('login-page');
Route::get('/register-page', [App\Http\Controllers\Auth\AuthController::class, 'register_page'])->name('register-page');
Route::post('/register-action', [App\Http\Controllers\Auth\AuthController::class, 'register']);
Route::post('/login-action', [App\Http\Controllers\Auth\AuthController::class, 'login']);
Route::post('/logout-action', [App\Http\Controllers\Auth\AuthController::class, 'logout']);



Route::resource('kategori', App\Http\Controllers\KategoriController::class);
Route::get('/delete-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('delete-kategori');

Route::resource('buku', App\Http\Controllers\BukuController::class);
Route::get('/delete-buku/{id}', [App\Http\Controllers\BukuController::class, 'destroy'])->name('delete-buku');

Route::resource('peminjaman', App\Http\Controllers\PeminjamanController::class);
Route::post('/peminjaman-steptwo', [App\Http\Controllers\PeminjamanController::class, 'peminjaman_steptwo']);
Route::get('/delete-peminjaman/{id}', [App\Http\Controllers\PeminjamanController::class, 'destroy'])->name('delete-peminjaman');
Route::post('/hapus-status/{id}', [App\Http\Controllers\PeminjamanController::class, 'hapus_status']);
Route::post('/ubah-status/{id}', [App\Http\Controllers\PeminjamanController::class, 'ubah_status']);

Route::resource('koleksi', App\Http\Controllers\KoleksiBukuController::class);
Route::get('/hapus-koleksi/{id}', [App\Http\Controllers\KoleksiBukuController::class, 'destroy']);

Route::resource('ulasan', App\Http\Controllers\UlasanController::class);

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

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/dashboard-admin-page', function () {
        return view('data-management.dashboard');
    });
    Route::resource('user', App\Http\Controllers\UserController::class);
});


