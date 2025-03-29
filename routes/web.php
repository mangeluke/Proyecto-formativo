<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductosController;

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
});

Route::get('/productos', function () {
    return view('productos'); // Asegúrate de tener una vista llamada 'products.blade.php'
})->name('productos');

// Ruta para Contacto
Route::get('/contactos', function () {
    return view('contactos'); // Asegúrate de tener una vista llamada 'contact.blade.php'
})->name('contactos');
Route::post('/auth/submit', [AuthController::class, 'submit'])->name('auth.submit');

require __DIR__.'/auth.php';
