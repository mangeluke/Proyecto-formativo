<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'telefono' => '1234567890',
            'direccion' => 'Calle 123, Ciudad',
            'password' => Hash::make('contraseña123'), // Hashea la contraseña
        ]);
    }
}
