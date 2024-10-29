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
                                {{ __('Órdenes') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('orden.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Crear nueva orden') }}
                                </a>
                            </div>
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
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        <th>Descripción</th>
                                        <th>Fecha de Creación</th>
                                        <th>Estado</th>
                                        <th>Técnico</th>
                                        <th>Vehículo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($ordenes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tarea }}</td>
                                        <td>{{ $item->fecha }}</td>
                                        <td>{{ $item->estado ?? 'Sin estado' }}</td>
                                        <td>{{ $item->tecnico->nombre ?? 'No asignado' }}</td> <!-- Mostrar nombre del técnico o "No asignado" -->
                                        <td>{{ $item->vehiculo->modelo ?? 'No asignado' }}</td> <!-- Mostrar modelo del vehículo o "No asignado" -->
                                        <td>
                                            <form action="{{ route('orden.destroy', $item->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('orden.show', $item->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar detalles') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('orden.edit', $item->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro que quiere eliminar la orden?');"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No hay órdenes disponibles.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                            <!-- Mostrar enlaces de paginación -->
                            <div class="d-flex justify-content-center">
                                {{ $ordenes->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
