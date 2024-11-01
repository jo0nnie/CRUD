@extends('layouts.app')

@section('template_title')
    Vehículos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <span id="card_title">{{ __('Vehículos') }}</span>
                        <div class="float-right">
                            <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm">
                                {{ __('Añadir Vehículo') }}
                            </a>
                            <a href="{{ route('tecnicos.index') }}" class="btn btn-secondary btn-sm" style="margin-left: 5px;">
                                {{ __('Ver Técnicos') }}
                            </a>
                            <a href="{{ route('orden.index') }}" class="btn btn-secondary btn-sm" style="margin-left: 5px;">
                                {{ __('Ver Órdenes') }}
                            </a>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Descripción</th>
                                        <th>Modelo</th>
                                        <th>Stock</th>
                                        <th>Estado</th>
                                        <th>Disponibilidad</th>
                                        <th>Equipo de Trabajo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0; @endphp
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $vehiculo->descripcion }}</td>
                                            <td>{{ $vehiculo->modelo }}</td>
                                            <td>{{ $vehiculo->stock }}</td>
                                            <td>{{ $vehiculo->estado }}</td>
                                            <td>{{ $vehiculo->disponibilidad }}</td>
                                            <td>{{ $vehiculo->equipo_trabajo }}</td>
                                            <td>
                                                <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                                                <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-success btn-sm">Editar</a>
                                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro que quiere eliminar el vehículo?')">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $vehiculos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

