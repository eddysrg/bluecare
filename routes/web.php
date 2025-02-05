<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lyrium', [PageController::class, 'lyrium'])->name('lyrium');
Route::get('/ece/{nivel}', [PageController::class, 'ece'])->name('ece');
Route::get('/mvs', [PageController::class, 'mvs'])->name('mvs');
Route::get('/productos', [PageController::class, 'productos'])->name('productos');
Route::get('/productos/{producto}', [PageController::class, 'producto'])->name('producto');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('dashboard/expedientes', [RecordController::class, 'records'])->name('dashboard.expedientes');
});

require __DIR__ . '/auth.php';
