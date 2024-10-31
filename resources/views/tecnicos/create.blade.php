@extends('layouts.app')

@section('content')
<h1>Agregar Nuevo Técnico</h1>
<form method="POST" action="{{ route('tecnicos.store') }}">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="especialidad">Especialidad</label>
        <select name="especialidad" id="especialidad" class="form-control" required>
            <option value="conexion">Conexión</option>
            <option value="desconexion">Desconexión</option>
            <option value="instalacion_domiciliaria">Instalación Domiciliaria</option>
            <option value="reconexion">Reconexión</option>
        </select>
    </div>
    <div class="form-group">
        <label for="grupo_trabajo">Grupo de Trabajo</label>
        <select name="grupo_trabajo" id="grupo_trabajo" class="form-control" required>
            <option value="grupo1">Grupo 1</option>
            <option value="grupo2">Grupo 2</option>
            <option value="grupo3">Grupo 3</option>
        </select>
    </div>
    <div class="form-group">
        <label for="disponibilidad">Disponibilidad</label>
        <select name="disponibilidad" id="disponibilidad" class="form-control" required>
            <option value="disponible">Disponible</option>
            <option value="no_disponible">No Disponible</option>
        </select>
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear Técnico</button>
</form>
@endsection

