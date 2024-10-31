@extends('layouts.app')

@section('template_title')
    Órdenes
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Técnicos') }}
                            </span>
                            <div class="float-right">
                            <a href="{{ route('tecnicos.create') }}" class="btn btn-success btn-sm float-center" style="margin-right: 5px;">
                                {{ __('Crear nuevo técnico') }}
                                </a>
                                <a href="{{ route('orden.index') }}" class="btn btn-secondary btn-sm float-right" style="margin-right: 5px;">
                                    {{ __('Ver Ordenes') }}
                                </a>
                                <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary btn-sm float-right" style="margin-right: 5px;">
                                    {{ __('Ver Vehículos') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="table-responsive">    <h1>Técnicos</h1>
                        <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th> 
                                        <th>Especialidad</th>
                                        <th>Grupo de Trabajo</th>
                                        <th>Disponibilidad</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tecnicos as $tecnico)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Muestra el número de fila -->
                                        <td>{{ $tecnico->nombre }}</td>
                                        <td>{{ $tecnico->apellido }}</td> <!-- Mostrar el apellido -->
                                        <td>{{ $tecnico->especialidad }}</td>
                                        <td>{{ $tecnico->grupo_trabajo }}</td>
                                        <td>{{ $tecnico->disponibilidad }}</td>
                                        <td>{{ $tecnico->telefono }}</td>
                                        <td>
                                            <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="btn btn-info btn-sm">Detalles</a>
                                            <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                            <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $tecnicos->links() }} <!-- Paginación -->
                        </div>
                        @endsection



