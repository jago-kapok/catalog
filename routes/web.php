<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('admin.dashboard');
})->name('admin');

Route::get('/', [App\Http\Controllers\PostController::class, 'landing'])->name('landing');
Route::get('/show-post/{id}', [App\Http\Controllers\PostController::class, 'post']);

Route::prefix('post')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('/form/{id?}', [App\Http\Controllers\PostController::class, 'form'])->name('post-form');
    Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->name('post-store');
    Route::post('/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('post-destroy');
});

Route::prefix('kategori')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
    Route::get('/form/{id?}', [App\Http\Controllers\KategoriController::class, 'form'])->name('kategori-form');
    Route::post('/store', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori-store');
    Route::post('/destroy', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('kategori-destroy');
});

Auth::routes();
