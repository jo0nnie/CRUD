@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->descripcion ?? 'Detalle del Vehículo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Detalle del Vehículo</span>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $vehiculo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $vehiculo->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $vehiculo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $vehiculo->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Disponibilidad:</strong>
                            {{ $vehiculo->disponibilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo de Trabajo:</strong>
                            {{ $vehiculo->equipo_trabajo }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


