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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/siswaDashboard', function () {
    return view('siswaDashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', [LoginController::class, 'login']);

Route::post('/login', [LoginController::class, 'postLogin']);

Route::get('/perpustakaan/{buku}', [RoutesController::class, 'perpustakaan']);

Route::get('/book/create', [BookController::class, 'create'])->name('book.create');

Route::post('/book/store', [BookController::class, 'store'])->name('book.store');   