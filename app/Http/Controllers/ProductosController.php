<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos; // Asegúrate de tener un modelo llamado Product

class ProductController extends Controller
{
    /**
     * Mostrar una lista de productos.
     */
    public function index()
    {
        $products = Productos::all(); // Obtener todos los productos
        return view('products.index', compact('products'));
    }

    /**
     * Mostrar el formulario para crear un nuevo producto.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Almacenar un nuevo producto en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        Productos::create($validated);

        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }

    /**
     * Mostrar los detalles de un producto específico.
     */
    public function show(Productos $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Mostrar el formulario para editar un producto.
     */
    public function edit(Productos $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Actualizar un producto en la base de datos.
     */
    public function update(Request $request, Productos $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Eliminar un producto de la base de datos.
     */
    public function destroy(Productos $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
    }
}