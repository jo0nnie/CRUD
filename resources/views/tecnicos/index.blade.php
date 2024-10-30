@extends('layouts.app')

@section('template_title')
    Técnicos
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
                                <a href="{{ route('tecnicos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Crear nuevo técnico') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Técnicos</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>Especialidad</th>
                                    <th>Grupo de Trabajo</th>
                                    <th>Disponibilidad</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp <!-- Inicializa $i aquí -->
                                @foreach ($tecnicos as $tecnico)
                                    <tr>
                                        <td>{{ ++$i }}</td> <!-- Incrementa $i -->
                                        <td>{{ $tecnico->nombre }}</td>
                                        <td>{{ $tecnico->especialidad }}</td>
                                        <td>{{ $tecnico->telefono }}</td>
                                        <td>
                                            <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('tecnicos.show', $tecnico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar detalles') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('tecnicos.edit', $tecnico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Está seguro que quiere eliminar al técnico?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

