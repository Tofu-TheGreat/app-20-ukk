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

Route::get('/login-page', function () {
    return view('auth-page.login');
})->name('login-page');
Route::get('/register-page', function () {
    return view('auth-page.register');
});



Route::get('/dashboard-admin-page', function () {
    return view('data-management.dashboard');
});
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

Route::get('/category-page', function () {
    return view('data-management.category-pages.category-table');
});

Route::get('/peminjaman-page', function () {
    return view('data-management.peminjaman-pages.peminjaman-tables');
});
