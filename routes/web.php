<?php

use App\Models\Peminjam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\BukuDetailController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/', [BiodataController::class, 'index']);
    Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.index');
    Route::get('/biodata/create', [BiodataController::class, 'create'])->name('biodata.create');
    Route::get('/biodata/{id}/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
    Route::put('/biodata/{id}', [BiodataController::class, 'update'])->name('biodata.update');
    Route::delete('/biodata/{id}', [BiodataController::class, 'destroy'])->name('biodata.destroy');
    Route::post('/biodata/store', [BiodataController::class, 'store'])->name('biodata.store');

    Route::get('/buku', [BukuDetailController::class, 'index'])->name('buku.index');
    Route::get('/buku/create', [BukuDetailController::class, 'create'])->name('buku.create');
    Route::get('/buku/{id}/edit', [BukuDetailController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/{id}', [BukuDetailController::class, 'update'])->name('buku.update');
    Route::delete('/buku/{id}', [BukuDetailController::class, 'destroy'])->name('buku.destroy');
    Route::post('/buku/store', [BukuDetailController::class, 'store'])->name('buku.store');

    Route::resource('/user', UserController::class);

    Route::resource('/peminjam', PeminjamController::class);
});


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
