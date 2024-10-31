@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Orden de Trabajo</h1>
    <form action="{{ route('orden.update', $orden->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <h4>Detalles de la Orden</h4>
        <div class="form-group">
            <label for="estado">Estado de Orden</label>
            <select name="estado" id="estado" class="form-control">
                <option value="creado" {{ $orden->estado == 'creado' ? 'selected' : '' }}>Creado</option>
                <option value="en_proceso" {{ $orden->estado == 'en_proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="completado" {{ $orden->estado == 'completado' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha de Creación</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $orden->fecha }}" required>
        </div>

        <div class="form-group">
            <label for="tarea">Tarea</label>
            <select name="tarea" id="tarea" class="form-control">
                <option value="conexion">Conexión</option>
                <option value="desconexion">Desconexión</option>
                <option value="instalacion_domiciliaria">Instalación Domiciliaria</option>
                <option value="reconexion">Reconexión</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tecnico_id">Equipo de Trabajo</label>
            <select name="tecnico_id" id="tecnico_id" class="form-control">
                @foreach($tecnicos as $tecnico)
                    <option value="{{ $tecnico->id }}" {{ $orden->tecnico_id == $tecnico->id ? 'selected' : '' }}>{{ $tecnico->nombre }}</option>
                @endforeach
            </select>
        </div>

        <h4>Datos del Cliente</h4>
        <div class="form-group">
            <label for="cliente">Nombre del Cliente</label>
            <input type="text" name="cliente" id="cliente" class="form-control" value="{{ $orden->cliente }}" required>
        </div>
        
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $orden->direccion }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Orden</button>
        <a href="{{ route('orden.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection

