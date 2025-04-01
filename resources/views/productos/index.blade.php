<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
        <header class="header">
            <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

            <div class="logo-header">
                <h1 class="logo-nov">Novedades del Mimbre</h1>
                <ul class="menu-header">
                    <li><a href="/dashboard">Inicio</a></li>
                    <li><a href="/productos">Productos</a></li>
                    <li><a href="/contactos">Contáctame</a></li>
                    <li class="cart-menu">
                        <a href="#">
                            <span class="cart-num">0</span>
                        </a>
                        <div class="cart-dropdown-menu">
                            <p>No hay productos en el carrito.</p>
                            <button class="buy-products">
                                <a style="background-color: #007bff;" href="/pages/compra.html">Comprar Productos</a>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <div class="top-left-menu">
            
            <ul class="dropdown-menu-items nav flex-column" aria-label="main-header">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactos') }}">Contáctame</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Próximamente</a>
                </li>
            </ul>
        </div>
        <main>
            <section class="descripcion-productos">
                <h2 class="titulo-descripcion">Descubre la Belleza del Mimbre</h2>
                <p class="texto-descripcion">
                    Nuestros productos de mimbre están elaborados artesanalmente, ofreciendo calidad y elegancia en cada detalle.
                    Ideales para decorar tu hogar con un toque rústico y natural.
                </p>
            </section>
            <section class="producto-contenido">
                <h2 id="productos" class="producti-h2">Nuestros productos</h2>
                <div class="product-filter">
                    <div class="search-box-wrapper">
                        <input type="text" id="search-box" placeholder="Buscar productos..." />
                        <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                    </div>
                    <div class="filter-options hidden">
                        <label for="category">Categoría:</label>
                        <select id="category">
                            <option value="all">Todos</option>
                            <option value="electronics">Tamaño</option>
                            <option value="books">Novedades</option>
                        </select>
                        <label for="price-range">Precio:</label>
                        <input type="range" id="price-range" min="10000" max="1000000" step="10" />
                        <span>10,000</span>
                    </div>
                </div>
                <button id="toggle-filters">Mostrar Filtros</button>
            </section>
            <section class="producto-contenido">
                <h2 id="productos" class="producti-h2">Nuestros productos de Mimbre</h2>
                <div class="container top-productos">
                    <div class="container-produts">
                        <div class="card-product">
                            <div class="container-img">
                                <img src="{{ asset('images/imagen1.jpeg') }}" alt="Canasta de Mimbre" />
                                <span class="discond">-13%</span>
                            </div>
                            <div class="content-card-product">
                                <h3>Canasta Iris</h3>
                                <p class="precio">$4.60 <span>$5.30</span></p>
                                <button class="btn-agregar">Agregar al carrito</button>
                            </div>
                        </div>
                        <!-- Repite para otros productos -->
                        <div class="card-product">
                            <div class="container-img">
                                <img src="{{ asset('images/imagen1.jpeg') }}" alt="Canasta de Mimbre" />
                                <span class="discond">-13%</span>
                            </div>
                            <div class="content-card-product">
                                <h3>Canasta Iris</h3>
                                <p class="precio">$4.60 <span>$5.30</span></p>
                                <button class="btn-agregar">Agregar al carrito</button>
                            </div>
                        </div>

                        <div class="card-product">
                            <div class="container-img">
                                <img src="{{ asset('images/imagen1.jpeg') }}" alt="Canasta de Mimbre" />
                                <span class="discond">-13%</span>
                            </div>
                            <div class="content-card-product">
                                <h3>Canasta Iris</h3>
                                <p class="precio">$4.60 <span>$5.30</span></p>
                                <button class="btn-agregar">Agregar al carrito</button>
                            </div>
                        </div>

                        <div class="card-product">
                            <div class="container-img">
                                <img src="{{ asset('images/imagen1.jpeg') }}" alt="Canasta de Mimbre" />
                                <span class="discond">-13%</span>
                            </div>
                            <div class="content-card-product">
                                <h3>Canasta Iris</h3>
                                <p class="precio">$4.60 <span>$5.30</span></p>
                                <button class="btn-agregar">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="promos container" id="lista-1">
                <h2>Promociones</h2>
                <div class="categories">
                    <div class="categorie">
                        <div class="categorie-1">
                            <h3>Promo 1</h3>
                            <div class="prices">
                                <p class="price-1">$199</p>
                                <p class="precio">$159</p>
                            </div>
                            <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al Carrito</a>
                        </div>
                        <div class="categorie-img">
                            <img src="{{ asset('images/imagen4.jpg') }}" alt="Promo 1" />
                        </div>
                    </div>
                    <div class="categorie">
                        <div class="categorie-1">
                            <h3>Promo 2</h3>
                            <div class="prices">
                                <p class="price-1">$199</p>
                                <p class="precio">$159</p>
                            </div>
                            <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al Carrito</a>
                        </div>
                        <div class="categorie-img">
                            <img src="{{ asset('images/imagen5.jpeg') }}" alt="Promo 2" />
                        </div>
                    </div>
                    <div class="categorie">
                        <div class="categorie-1">
                            <h3>Promo 3</h3>
                            <div class="prices">
                                <p class="price-1">$199</p>
                                <p class="precio">$159</p>
                            </div>
                            <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al Carrito</a>
                        </div>
                        <div class="categorie-img">
                            <img src="{{ asset('images/imagen6.jpg') }}" alt="Promo 3" />
                        </div>
                    </div>
                    <div class="categorie">
                        <div class="categorie-1">
                            <h3>Promo 4</h3>
                            <div class="prices">
                                <p class="price-1">$199</p>
                                <p class="precio">$159</p>
                            </div>
                            <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al Carrito</a>
                        </div>
                        <div class="categorie-img">
                            <img src="{{ asset('images/imagen2.jpg') }}" alt="Promo 4" />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</x-app-layout>