<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos; // Asegúrate de tener un modelo llamado Product

class ProductosController extends Controller
{
    /**
     * Mostrar una lista de productos.
     */
    public function index()
    {
        return view('productos.index');

    }

    /**
     * Mostrar el formulario para crear un nuevo producto.
     */
    public function create()
    {

    }

    /**
     * Almacenar un nuevo producto en la base de datos.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Mostrar los detalles de un producto específico.
     */
    public function show(Productos $product)
    {
       
    }

    /**
     * Mostrar el formulario para editar un producto.
     */
    public function edit(Productos $product)
    {
        
    }

    /**
     * Actualizar un producto en la base de datos.
     */
    public function update(Request $request, Productos $product)
    {
        
    }

    /**
     * Eliminar un producto de la base de datos.
     */
    public function destroy(Productos $product)
    {
        
    }
}