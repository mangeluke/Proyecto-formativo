<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Especifica la tabla asociada
    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'password']; // Agregar 'password'
}
