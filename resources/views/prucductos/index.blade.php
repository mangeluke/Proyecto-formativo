<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Lista de Productos</h1>
                    <table className="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th className="px-4 py-2">ID</th>
                                <th className="px-4 py-2">Nombre</th>
                                <th className="px-4 py-2">Descripción</th>
                                <th className="px-4 py-2">Precio</th>
                                <th className="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td className="border px-4 py-2">{{ $product->id }}</td>
                                    <td className="border px-4 py-2">{{ $product->name }}</td>
                                    <td className="border px-4 py-2">{{ $product->description }}</td>
                                    <td className="border px-4 py-2">${{ $product->price }}</td>
                                    <td className="border px-4 py-2">
                                        <a href="{{ route('products.show', $product->id) }}" className="text-blue-500">Ver</a>
                                        <a href="{{ route('products.edit', $product->id) }}" className="text-green-500 ml-2">Editar</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" className="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" className="text-red-500 ml-2">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>