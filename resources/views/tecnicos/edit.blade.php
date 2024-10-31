@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Técnico</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('tecnicos.update', $tecnico->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $tecnico->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ old('apellido', $tecnico->apellido) }}" required>
        </div>

        <div class="form-group">
        <label for="especialidad">Especialidad</label>
        <select name="especialidad" id="especialidad" class="form-control" required>
            <option value="conexion">Conexión</option>
            <option value="desconexion">Desconexión</option>
            <option value="instalacion_domiciliaria">Instalación Domiciliaria</option>
            <option value="reconexion">Reconexión</option>
        </select>

        <div class="form-group">
        <label for="grupo_trabajo">Grupo de Trabajo</label>
        <select name="grupo_trabajo" id="grupo_trabajo" class="form-control" required>
            <option value="grupo1">Grupo 1</option>
            <option value="grupo2">Grupo 2</option>
            <option value="grupo3">Grupo 3</option>
        </select>

        <label for="disponibilidad">Disponibilidad</label>
        <select name="disponibilidad" id="disponibilidad" class="form-control" required>
            <option value="disponible">Disponible</option>
            <option value="no_disponible">No Disponible</option>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono', $tecnico->telefono) }}">
        </div>


        <button type="submit" class="btn btn-primary">Actualizar Técnico</button>
        <a href="{{ route('tecnicos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
