@extends('layouts.app')

@section('content')
<h1>Agregar Nuevo Técnico</h1>
<form action="{{ route('tecnicos.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="apellido" placeholder="Apellido" required>
    <input type="email" name="email" placeholder="Email" required>

    <button type="submit">Registrar Técnico</button>
</form>
@endsection