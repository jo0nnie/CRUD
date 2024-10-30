@extends('layouts.app')

@section('template_title')
    Vehículo Detalles
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Detalles del Vehículo</h3>
                <a href="{{ route('vehiculos.index') }}" class="btn btn-primary btn-sm">Volver</a>
            </div>

            <div class="card-body">
                <p><strong>Descripción:</strong> {{ $vehiculo->descripcion }}</p>
                <p><strong>Modelo:</strong> {{ $vehiculo->modelo }}</p>
                <p><strong>Stock:</strong> {{ $vehiculo->stock }}</p>
            </div>
        </div>
    </section>
@endsection

