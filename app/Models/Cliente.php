<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable
{
    use HasFactory, Notifiable;

    // Especifica los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'direccion',
        'password',
    ];

    // Oculta el campo password al serializar el modelo
    protected $hidden = [
        'password',
    ];

    // Define las conversiones de tipos de datos (si es necesario)
    protected $casts = [
        'fecha_registro' => 'datetime',
    ];
    public $timestamps = false; // Desactiva las marcas de tiempo
}