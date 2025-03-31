<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ClienteController;

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

Route::get('/productos', [ProductosController::class, 'index'])->name('productos');

// Ruta para Contacto
Route::get('/contactos', function () {
    return view('contactos'); // Asegúrate de tener una vista llamada 'contactos.blade.php'
})->name('contactos');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos');

// Ruta para manejar el envío del formulario
Route::post('/contactos', [ContactoController::class, 'store'])->name('contactos.store');

Route::post('/auth/submit', [AuthController::class, 'submit'])->name('auth.submit');




Route::post('/registrar-cliente', [ClienteController::class, 'store'])->name('cliente.store');

require __DIR__.'/auth.php';
