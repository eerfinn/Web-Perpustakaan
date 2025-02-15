<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RequestContext;

// Route::match(['get', 'post'], '/anggota', function () {
//     return 'Hallo, aku membuat route anggota dengan beberapa method';
// });

// Route::get('/dashboard', [RoutesController::class, 'Dashboard']);

// Route::redirect('/buku', '/dashboard');

// Route::get('/', [RequestController::class, 'store']);

// Route::get('/nama', function () {
//     $nama = session('nama');
//     return 'Halaman nama dengan nama ' . $nama;
// });

// Route::get('/array', function () {
//     return [1, 'Perpustakaan', true];
// });

// Route::get('/hello', function () {
//     return response('Hello Laravel', 200)
//         ->header('Content-Type', 'text/plain');
// });

// Route::get('/hello', function () {
//     return response($content = 'Hallo Laravel')
//         ->withHeaders([
//             'Content-Type' => 'text/html',
//             'X-Header-One' => 'Header Value 1',
//             'X-Header-Two' => 'Header Value 2',
//         ]);
// });

// Route::get('/tes', function () {
//     return redirect('/hello');
// });

// Route::get('/', [RoutesController::class, 'Dashboard']);

// Route::get('/tes', function () {
//     return redirect()->action([RoutesController::class, 'Dashboard']);
// });

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