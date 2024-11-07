<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ediciones Coquito Oruro</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sitio.css">
    <style>

.producto-card {
            margin-bottom: 15px;
        }
        .carrito-btn {
            margin-top: 10px;
        }
        .mensaje {
            display: none;
            background-color: #28a745;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Reservas Coquito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="#catalogo">Catálogo de Libros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#carrito">Carrito</a>
        </li>
    </ul>
</div>

        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1 class="titulo">Bienvenido a Ediciones Coquito Oruro</h1>
          
        </div>
    </div>

    <!-- Content Section -->
    <center>
    <div class="container-content1" id="catalogo">
        <h2>Explora Nuestro Catálogo</h2>
    </div>
    <div class="container-content2" id="catalogo">
        <div class="container mt-5">
            <!-- Categorías -->
            <center>
            <!-- Categorías -->
            <div class="accordion" id="catalogoLibros">
                <!-- INICIAL -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingInicial">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInicial" aria-expanded="true" aria-controls="collapseInicial">
                            INICIAL
                        </button>
                    </h2>
                    <div id="collapseInicial" class="accordion-collapse collapse" aria-labelledby="headingInicial" data-bs-parent="#catalogoLibros">
                        <div class="accordion-body row" id="categoria-inicial"></div>
                    </div>
                </div>

                <!-- PRIMARIA -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPrimaria">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrimaria" aria-expanded="false" aria-controls="collapsePrimaria">
                            PRIMARIA
                        </button>
                    </h2>
                    <div id="collapsePrimaria" class="accordion-collapse collapse" aria-labelledby="headingPrimaria" data-bs-parent="#catalogoLibros">
                        <div class="accordion-body row" id="categoria-primaria"></div>
                    </div>
                </div>

                <!-- SECUNDARIA -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSecundaria">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecundaria" aria-expanded="false" aria-controls="collapseSecundaria">
                            SECUNDARIA
                        </button>
                    </h2>
                    <div id="collapseSecundaria" class="accordion-collapse collapse" aria-labelledby="headingSecundaria" data-bs-parent="#catalogoLibros">
                        <div class="accordion-body row" id="categoria-secundaria"></div>
                    </div>
                </div>

                <!-- ADULTO -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAdulto">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdulto" aria-expanded="false" aria-controls="collapseAdulto">
                            ADULTO
                        </button>
                    </h2>
                    <div id="collapseAdulto" class="accordion-collapse collapse" aria-labelledby="headingAdulto" data-bs-parent="#catalogoLibros">
                        <div class="accordion-body row" id="categoria-adulto"></div>
                    </div>
                </div>
            </div>
        </div>
   
   

            <h2 class="text-center mt-5">Reservas Seleccionadas</h2>
            <div id="carrito" class="border p-3">
                <ul id="lista-carrito" class="list-group"></ul>
                <div class="mt-3">
                    <button class="btn btn-primary" id="comprar" data-bs-toggle="modal" data-bs-target="#modalReserva">Reservar</button>
                </div>
            </div>
            <div id="mensajeReserva" style="display: none; background-color:  #1478d4; color: white; padding: 10px; position: fixed; top: 10px; right: 10px; border-radius: 5px; z-index: 1000;">
    Producto añadido al carrito.
</div>

        </div>
    </div>
 </div>
    </center>

    <!-- Modal de Reserva -->
    <div class="modal fade" id="modalReserva" tabindex="-1" aria-labelledby="modalReservaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header custom-header">
                    <h5 class="modal-title" id="modalReservaLabel">Formulario de Reserva</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formReserva">
                        <div class="mb-3">
                            <label for="ciCliente" class="form-label">CI</label>
                            <input type="text" class="form-control"  id="ciCliente" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombreCliente" class="form-label">Nombre</label>
                            <input type="text" class="form-control"  id="nombreCliente" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefonoCliente" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefonoCliente" required>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" style="width: 100%;" class="btn btn-dark">Confirmar Reserva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function generarCodigoUnico() {
            return 'RES-' + Math.random().toString(36).substr(2, 9).toUpperCase();
        }

    
    const categorias = {
        inicial: [
            { id: 1, nombre: 'Pablito y Paola', precio: 50, imagen: 'dist/img/azules.jpeg', stock: 5 },
            { id: 2, nombre: 'Julio y Julia', precio: 80, imagen: 'dist/img/azules.jpeg', stock: 3 },
            { id: 3, nombre: 'Camilo y Camila', precio: 60, imagen: 'dist/img/azules.jpeg', stock: 4 },
            { id: 4, nombre: 'Rosa y Rolando', precio: 70, imagen: 'dist/img/azules.jpeg', stock: 2 },
            { id: 5, nombre: 'Maria y Martin', precio: 80, imagen: 'dist/img/azules.jpeg', stock: 6 },
            { id: 6, nombre: 'Jose y Julia', precio: 90, imagen: 'dist/img/azules.jpeg', stock: 1 }
        ],
        primaria: [
            { id: 3, nombre: 'Fabula', precio: 30, imagen: 'dist/img/azules.jpeg', stock: 10 },
            { id: 4, nombre: 'Caligrafia', precio: 15, imagen: 'dist/img/azules.jpeg', stock: 8 }
        ],
        secundaria: [
            { id: 5, nombre: 'Matemáticas Avanzadas', precio: 60, imagen: 'dist/img/azules.jpeg', stock: 7 },
            { id: 6, nombre: 'Historia Contemporánea', precio: 45, imagen: 'dist/img/azules.jpeg', stock: 5 }
        ],
        adulto: [
            { id: 7, nombre: 'Ficción Moderna', precio: 70, imagen: 'dist/img/azules.jpeg', stock: 3 },
            { id: 8, nombre: 'Ciencia Ficción', precio: 55, imagen: 'dist/img/azules.jpeg', stock: 4 }
        ]
    };

    const carrito = [];
    const listaCarrito = document.getElementById('lista-carrito');
    const mensajeReserva = document.getElementById('mensajeReserva');  // Asume que este es el ID del mensaje

    function mostrarProductos(categoriaId, productos) {
        const categoriaDiv = document.getElementById(categoriaId);
        productos.forEach(producto => {
            const productoDiv = document.createElement('div');
            productoDiv.classList.add('col-md-3', 'mb-4');
            productoDiv.innerHTML = `
                <div class="card producto-card">
                    <img src="${producto.imagen}" class="card-img-top" alt="${producto.nombre}">
                    <div class="card-body">
                        <h5 class="card-title">${producto.nombre}</h5>
                        <p class="card-text">Bs${producto.precio}</p>
                        <label for="cantidad${producto.id}" class="form-label">Cantidad (máx: ${producto.stock})</label>
                        <input type="number" class="form-control" id="cantidad${producto.id}" value="1" min="1" max="${producto.stock}" required>
                        <button class="btn btn-primary carrito-btn" onclick="agregarAlCarrito(${producto.id}, '${producto.nombre}', ${producto.precio}, ${producto.stock})">Agregar a Reservas</button>
                    </div>
                </div>
            `;
            categoriaDiv.appendChild(productoDiv);
        });
    }

    mostrarProductos('categoria-inicial', categorias.inicial);
    mostrarProductos('categoria-primaria', categorias.primaria);
    mostrarProductos('categoria-secundaria', categorias.secundaria);
    mostrarProductos('categoria-adulto', categorias.adulto);

    function agregarAlCarrito(idProducto, nombre, precio, stock) {
        const cantidad = parseInt(document.getElementById(`cantidad${idProducto}`).value);

        if (cantidad > stock) {
            // Si la cantidad seleccionada es mayor que el stock
            alert(`Solo quedan ${stock} ejemplares en stock.`);
            return; // No agrega el producto al carrito
        }

        const producto = { id: idProducto, nombre, precio, cantidad };
        carrito.push(producto);
        actualizarCarrito();
        
        // Mostrar el mensaje de reserva
        mensajeReserva.style.display = 'block'; // Muestra el mensaje
        setTimeout(function() {
            mensajeReserva.style.display = 'none'; // Oculta el mensaje después de 3 segundos
        }, 3000);
    }

    function actualizarCarrito() {
        listaCarrito.innerHTML = '';
        carrito.forEach((producto, index) => {
            const item = document.createElement('li');
            item.classList.add('list-group-item', 'd-flex', 'justify-content-between');
            item.innerHTML = `
                ${producto.nombre} - ${producto.cantidad} x Bs${producto.precio}
                <button class="btn btn-danger btn-sm" onclick="eliminarDelCarrito(${index})">Eliminar</button>
            `;
            listaCarrito.appendChild(item);
        });
    }

    function eliminarDelCarrito(index) {
        carrito.splice(index, 1);
        actualizarCarrito();
    }

    document.getElementById('formReserva').addEventListener('submit', function(event) {
        event.preventDefault();
        if (carrito.length > 0) {
            const nombre = document.getElementById('nombreCliente').value;
            const telefono = document.getElementById('telefonoCliente').value;

            const codigoUnico = generarCodigoUnico();
            const carritoDetalles = carrito.map(producto => `${producto.nombre} (Bs${producto.precio} x ${producto.cantidad})`).join(', ');
            const totalReserva = carrito.reduce((acc, producto) => acc + (producto.precio * producto.cantidad), 0);
            
            const reservaData = {
                ciCliente: document.getElementById('ciCliente').value,
                nombreCliente: nombre,
                telefonoCliente: telefono,
                codigoReserva: codigoUnico,
                totalReserva: totalReserva,
                carritoDetalles: carritoDetalles
            };

            console.log(reservaData); // Puedes enviar estos datos al servidor
        }
    });

    function generarCodigoUnico() {
        return 'RES-' + Math.floor(Math.random() * 10000);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
