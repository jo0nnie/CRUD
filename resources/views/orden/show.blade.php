<!-- resources/views/ordens/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalles de la Orden</h1>
    <p>Nombre: {{ $orden->nombre }}</p>
    <a href="{{ route('orden.edit', $orden->id) }}">Editar</a>
    <a href="{{ route('orden.index') }}">Volver a la lista</a>
@endsection
