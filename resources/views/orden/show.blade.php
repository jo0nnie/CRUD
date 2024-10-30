<!-- resources/views/ordens/show.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Detalles de la Orden</h1>
<p><strong>Nombre:</strong> {{ $orden->nombre }}</p>
<p><strong>Estado:</strong> {{ $orden->estado }}</p>
<p><strong>Fecha de Creación:</strong> {{ $orden->fecha_creacion }}</p>
<p><strong>Equipo de Trabajo:</strong> {{ $orden->equipo }}</p>
<p><strong>Tarea a Realizar:</strong> {{ $orden->tarea }}</p>

<a href="{{ route('orden.edit', $orden->id) }}" class="btn btn-primary">Editar</a>
<a href="{{ route('orden.index') }}" class="btn btn-secondary">Volver a la lista</a>

@endsection
