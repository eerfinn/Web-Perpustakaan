<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RequestContext;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswaDashboard', function () {
    return view('/siswa/siswaDashboard');
});

Route::get('/adminDashboard', function () {
    return view('/admin/adminDashboard');
});

Route::get('/siswaBuku', function () {
    return view('/siswa/siswaBuku');
});

Route::get('/adminBuku', function () {
    return view('/admin/adminBuku');
});

Route::get('/siswaCreatePeminjaman', function () {
    return view('/siswa/siswaCreatePeminjaman');
});

Route::get('/adminCreateBuku', function () {
    return view('/admin/adminCreateBuku');
});

Route::get('/adminUpdateBuku', function () {
    return view('/admin/adminUpdateBuku');
});

Route::get('/login', [LoginController::class, 'login']);

Route::post('/login', [LoginController::class, 'postLogin']);

Route::get('/perpustakaan/{buku}', [RoutesController::class, 'perpustakaan']);

Route::get('/book/create', [BookController::class, 'create'])->name('book.create');

Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
