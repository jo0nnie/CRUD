@extends('layouts.app')

@section('content')
    <h1>Editar Orden</h1>
    <form action="{{ route('orden.update', $orden->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $orden->nombre }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection
