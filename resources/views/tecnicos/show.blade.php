@extends('layouts.app')

@section('content')
<h1>Detalles del Técnico</h1>

<p><strong>Nombre:</strong> {{ $tecnico->nombre }}</p>
<p><strong>Apellido:</strong> {{ $tecnico->apellido }}</p>
<p><strong>Email:</strong> {{ $tecnico->email }}</p>

<a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning">Editar</a>
<a href="{{ route('tecnicos.index') }}" class="btn btn-secondary">Volver a la Lista de Técnicos</a>
@endsection