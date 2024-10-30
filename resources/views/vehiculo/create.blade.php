@extends('layouts.app')

@section('template_title')
    Crear Vehículo
@endsection

@section('content')
<section class="content container-fluid">
    <form method="POST" action="{{ route('vehiculos.store') }}">
        @csrf
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" name="descripcion" value="{{ old('descripcion', $vehiculo->descripcion ?? '') }}">
            </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control">
        </div>
        <div class="form-group">
            <label for="equipo_trabajo">Equipo de Trabajo</label>
            <select name="equipo_trabajo" id="equipo_trabajo" class="form-control">
                <option value="conexion">Conexión</option>
                <option value="desconexion">Desconexión</option>
                <option value="instalacion_domiciliaria">Instalación Domiciliaria</option>
                <option value="reconexion">Reconexión</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Vehículo</button>
    </form>
</section>
@endsection

