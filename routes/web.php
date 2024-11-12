<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\productoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/products/{id}',[productoController::class,'destroy'])->name('products.destroy');
    Route::post('/products', [productoController::class, 'store'])->name('products.store');
    Route::get('/products/crear', [productoController::class, 'create'])->name('products.create');
    Route::get('/products', [productoController::class, 'index'])->name('sisven.index');
    Route::put('/products/{id}', [productoController::class, 'update'])->name('products.update');
    Route::get('/products/{id}/edit', [productoController::class, 'edit'])->name('products.edit');
});

require __DIR__.'/auth.php';
