@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Técnico</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $tecnico->nombre }} {{ $tecnico->apellido }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $tecnico->email }}</p>
            <p><strong>Especialidad:</strong> {{ $tecnico->especialidad }}</p>
            <p><strong>Grupo de Trabajo:</strong> {{ $tecnico->grupo_trabajo }}</p>
            <p><strong>Disponibilidad:</strong> {{ $tecnico->disponibilidad }}</p>
            <p><strong>Teléfono:</strong> {{ $tecnico->telefono }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning">Editar Técnico</a>
            <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar Técnico</button>
            </form>
            <a href="{{ route('tecnicos.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
