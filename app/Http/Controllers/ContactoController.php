<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contactos.index'); // Asegúrate de que coincida con la ubicación de la vista
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        // Aquí puedes enviar el correo o guardar los datos en la base de datos
        // Ejemplo: Enviar un correo
        \Mail::to('tucorreo@example.com')->send(new \App\Mail\ContactoMail($validated));

        // Redireccionar con un mensaje de éxito
        return redirect()->route('contactos.index')->with('success', '¡Tu mensaje ha sido enviado!');
    }
}
