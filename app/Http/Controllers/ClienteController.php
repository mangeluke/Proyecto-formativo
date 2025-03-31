<?php
namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validar los datos del formulario
            $validated = $request->validate([
                'nombre' => 'required|string|max:100',
                'email' => 'required|email|unique:clientes,email',
                'telefono' => 'nullable|string|max:20',
                'direccion' => 'nullable|string',
                'password' => 'required|string|min:6', // Validar la contraseña
            ], [
                'email.unique' => 'Este correo electrónico ya está registrado.',
                'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
            ]);

            // Crear un nuevo cliente en la base de datos
            $cliente = Cliente::create([
                'nombre' => $validated['nombre'],
                'email' => $validated['email'],
                'telefono' => $validated['telefono'] ?? null,
                'direccion' => $validated['direccion'] ?? null,
                'password' => Hash::make($validated['password']),
                'fecha_registro' => now(), // Asegúrate de establecer la fecha de registro
            ]);

            // Autenticar al usuario recién registrado
            Auth::login($cliente);

            // Devolver una respuesta JSON indicando éxito
            return response()->json(['success' => true, 'message' => '¡Registro exitoso!']);
        } catch (\Exception $e) {
            \Log::error('Error al registrar cliente: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Ocurrió un error inesperado.' . $e->getMessage()], 500);
        }
        
    }
    
}