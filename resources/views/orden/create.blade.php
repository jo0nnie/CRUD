@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Orden</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('orden.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero_orden">Número de Orden</label>
            <input type="text" name="numero_orden" id="numero_orden" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tarea">Tarea</label>
            <input type="text" name="tarea" id="tarea" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cliente">Cliente</label>
            <input type="text" name="cliente" id="cliente" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tecnico_id">Técnico</label>
            <select name="tecnico_id" id="tecnico_id" class="form-control" required>
                <!-- Asegúrate de pasar los técnicos desde el controlador si los necesitas -->
                @foreach($tecnicos as $tecnico)
                    <option value="{{ $tecnico->id }}">{{ $tecnico->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Orden</button>
    </form>
</div>
@endsection

