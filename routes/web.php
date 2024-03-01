<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;



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
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profilpengguna', [ProfileController::class, 'index'])->name('profil.index');
Route::get('/profilpengguna/edit', [ProfileController::class, 'edit'])->name('profil.edit');
Route::put('/profilpengguna/update', [ProfileController::class, 'update'])->name('profil.update');

Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index');
Route::get('/koleksi/edit', [KoleksiController::class, 'edit'])->name('koleksi.edit');
Route::put('/koleksi/update', [KoleksiController::class, 'update'])->name('koleksi.update');

Route::get('/tambahbuku', [BukuController::class, 'index'])->name('tambahbuku.index');
Route::get('/tambahbuku/create', [BukuController::class, 'create'])->name('tambahbuku.create');
Route::post('/tambahbuku', [BukuController::class, 'store'])->name('tambahbuku.store');
Route::get('/tambahbuku/edit/{id}', [BukuController::class, 'edit'])->name('tambahbuku.edit');
Route::put('/tambahbuku/update/{id}', [BukuController::class, 'update'])->name('tambahbuku.update');
Route::delete('/tambahbuku/{id}', [BukuController::class, 'destroy'])->name('tambahbuku.destroy');

Route::get('/datapeminjam', [PeminjamanController::class, 'index'])->name('datapeminjam.index');
Route::get('/datapeminjam/create', [PeminjamanController::class, 'create'])->name('datapeminjam.create');
Route::post('/datapeminjam', [PeminjamanController::class, 'store'])->name('datapeminjam.store');
Route::get('/datapeminjam/edit/{id}', [PeminjamanController::class, 'edit'])->name('peminjam.edit');
Route::put('/datapeminjam/{id}', [PeminjamanController::class, 'update'])->name('peminjam.update');  
Route::delete('/datapeminjam/{id}', [PeminjamanController::class, 'destroy'])->name('peminjam.destroy');  

Route::get('/kategoribuku', function () {
    return view('kategoribuku');
});