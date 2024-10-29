@extends('layouts.app')

@section('content')
<h1>Editar Técnico</h1>
<form action="{{ route('tecnicos.update', $tecnico->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <input type="text" name="nombre" value="{{ $tecnico->nombre }}" required>
    <input type="text" name="apellido" value="{{ $tecnico->apellido }}" required>
    <input type="email" name="email" value="{{ $tecnico->email }}" required>

    <button type="submit">Actualizar Técnico</button>
</form>
@endsection