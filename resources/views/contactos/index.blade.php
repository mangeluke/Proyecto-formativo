<x-app-layout>
    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
        <header class="header">
            <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="logo-header">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
                <ul class="menu-header">
                    <li><a href="/dashboard">Inicio</a></li>
                    <li><a href="/productos">Productos</a></li>
                    <li><a href="/contactos">Contáctame</a></li>
                </ul>
            </div>
        </header>

        <main>
            <!-- Sección de Descripción -->
            <section class="descripcion-productos">
                <h2 class="titulo-descripcion">Puede contactarse por acá</h2>
                <p class="texto-descripcion">
                    En Novedades del Mimbre, nos dedicamos a la fabricación y venta de productos de mimbre de la mejor calidad.
                </p>
            </section>

            <!-- Sección de Contacto -->
            <section id="contacto" class="contacto">
                <h2 class="titulo-contacto">Contáctanos</h2>
                <form class="formulario-contacto" method="POST" action="{{ route('contactos.store') }}">
                    @csrf
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required />

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Tu email" required />

                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí" rows="4" required></textarea>

                    <button type="submit" class="btn-enviar">Enviar</button>
                </form>
            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</x-app-layout>