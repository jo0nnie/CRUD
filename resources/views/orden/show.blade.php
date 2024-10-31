<!-- resources/views/ordens/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Orden #{{ $orden->numero_orden }}</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Dirección:</strong> {{ $orden->direccion }}</li>
        <li class="list-group-item"><strong>Tarea:</strong> {{ $orden->tarea }}</li>
        <li class="list-group-item"><strong>Cliente:</strong> {{ $orden->cliente }}</li>
        <li class="list-group-item"><strong>Fecha:</strong> {{ $orden->fecha }}</li>
        <li class="list-group-item"><strong>Técnico:</strong> {{ $orden->tecnico->nombre }}</li>
        <li class="list-group-item"><strong>Vehículo:</strong> {{ $orden->vehiculo->modelo ?? 'N/A' }}</li>
        <li class="list-group-item"><strong>Acciones:</strong> {{ $orden->acciones ? json_decode($orden->acciones) : 'Ninguna' }}</li>
    </ul>

    <a href="{{ route('orden.edit', $orden->id) }}" class="btn btn-primary mt-3">Editar Orden</a>
    <a href="{{ route('orden.index') }}" class="btn btn-secondary mt-3">Volver a la lista de Órdenes</a>
</div>
@endsection

