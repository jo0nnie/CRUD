@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Has iniciado sesión!') }}

                    <a href="{{ route('tecnicos.index') }}">Lista de Técnicos</a>
                    <a href="{{ route('vehiculos.index') }}">Lista de Vehículos</a>
                    <a href="{{ route('orden.index') }}">Lista de Órdenes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
