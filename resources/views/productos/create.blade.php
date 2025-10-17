@extends('layouts.app')

@section('content')
<style>
    /* 🎨 Estilos morados simples y personales */
    .form-card {
        background-color: #f9f6ff;           /* Fondo lavanda */
        border: 1px solid #d4b8ff;          /* Borde lila */
        border-radius: 10px;                /* Bordes redondeados */
        padding: 25px;
        box-shadow: 0 4px 8px rgba(128, 0, 128, 0.1); /* Sombras suaves moradas */
    }

    .form-label {
        color: #5e2b91;                     /* Morado oscuro para las etiquetas */
        font-weight: 600;
    }

    .btn-morado {
        background-color: #6f42c1;          /* Botón morado */
        color: white;
        border: none;
    }

    .btn-morado:hover {
        background-color: #5a32a3;          /* Morado más oscuro al pasar el mouse */
        color: white;
    }

    .titulo-form {
        color: #5a32a3;
        font-weight: bold;
        text-align: center;
    }
</style>

<div class="container mt-4">
    <div class="form-card mx-auto" style="max-width: 600px;">
        <h2 class="titulo-form mb-4">Agregar Producto</h2>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Corrige los errores antes de continuar:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select name="categoria_id" class="form-select" required>
                    <option value="">-- Selecciona una categoría --</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="codigo_barras" class="form-label">Código de Barras</label>
                <input type="text" name="codigo_barras" class="form-control" required>
            </div>

            <!-- Campo Activo -->
<div class="mb-3">
    <label for="activo" class="form-label fw-semibold">Activo</label><br>

    <!-- El hidden envía 0 si el checkbox NO está marcado -->
    <input type="hidden" name="activo" value="0">

    <!-- El checkbox envía 1 si está marcado -->
    <input type="checkbox" name="activo" id="activo" value="1" {{ old('activo', 1) ? 'checked' : '' }}>
    <label for="activo"> Producto activo</label>
</div>

            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>
</div>
@endsection
