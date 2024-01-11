<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;


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
Route::get('/', [BiodataController::class, 'index']);
Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.index');
Route::get('/biodata/create', [BiodataController::class, 'create'])->name('biodata.create');
Route::get('/biodata/{id}/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
Route::put('/biodata/{id}', [BiodataController::class, 'update'])->name('biodata.update');
Route::delete('/biodata/{id}', [BiodataController::class, 'destroy'])->name('biodata.destroy');
Route::post('/biodata/store', [BiodataController::class, 'store'])->name('biodata.store');
