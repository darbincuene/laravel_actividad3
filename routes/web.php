<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\customController;
use App\Http\Controllers\invoiceController;
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
    Route::get('/clientes',[customController::class,'index'])->name('clientes.index');
    Route::get('/clientes/create', [customController::class,'create'])->name('clientes.create');


    Route::get('/clientes/{id}/edit',[customController::class,'edit'])->name('clientes.edit');
    Route::post('/clientes', [customController::class, 'store'])->name('clientes.store');

    //////////////////////////////////////////////////custom
    Route::get('/invoices', [invoiceController::class, 'index'])->name('sisven.facturas');
    Route::get('/invoices/create', [invoiceController::class,'create'])->name('invoices.create');
    Route::post('/invoices', [invoiceController::class, 'store'])->name('invoices.store');





    ////////////////////////////////////////////////
    Route::put ('/clientes/{id}',[customController::class,'update'])->name('clientes.update');
    Route::delete('/client/{id}',[customController::class,'destroy'])->name('clientes.destroy');
    //Route::get('/clientes', [customController::class, 'store'])->name('clientes.store'); 
 

});

require __DIR__.'/auth.php';
