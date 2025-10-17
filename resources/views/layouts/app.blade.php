<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Inventario </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background: linear-gradient(135deg, #f5f9ff, #eaf3ff);
            font-family: 'Poppins', sans-serif;
        }

        nav.navbar {
            background-color: #0077b6 !important; /* azul principal */
        }

        nav a.nav-link, nav .navbar-brand {
            color: #ffffff !important;
            font-weight: 500;
        }

        nav a.nav-link:hover {
            color: #caf0f8 !important; /* celeste claro */
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border: none;
        }

        .card-header {
            background-color: #00b4d8;
            color: white;
            font-weight: bold;
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
        }

        .btn-primary {
            background-color: #0096c7;
            border: none;
        }

        .btn-primary:hover {
            background-color: #00b4d8;
        }

        .btn-danger {
            background-color: #ef233c;
            border: none;
        }

        .btn-danger:hover {
            background-color: #d90429;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #555;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Inventario </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('categorias.index') }}">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="mt-4">
        <p>Desarrollado por Alessandro - Laravel 10</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
