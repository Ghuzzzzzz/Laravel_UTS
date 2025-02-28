<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SekolahController;
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
    return view('welcome');
});

Route::get('/dashboard', [SekolahController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');
Route::get('/sekolah/create', [SekolahController::class, 'create'])->name('sekolah.create');
Route::post('/sekolah', [SekolahController::class, 'store'])->name('sekolah.store');
Route::get('/sekolah/{id}/edit', [SekolahController::class, 'edit'])->name('sekolah.edit');
Route::put('/sekolah/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
Route::delete('/sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');