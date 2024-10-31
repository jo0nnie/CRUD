@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Orden</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('orden.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="numero_orden">Número de Orden</label>
            <input type="text" name="numero_orden" id="numero_orden" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tarea">Tarea</label>
            <select name="tarea" id="tarea" class="form-control">
                <option value="conexion">Conexión</option>
                <option value="desconexion">Desconexión</option>
                <option value="instalacion_domiciliaria">Instalación Domiciliaria</option>
                <option value="reconexion">Reconexión</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cliente">Cliente</label>
            <input type="text" name="cliente" id="cliente" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tecnico_id">Técnico</label>
            <select name="tecnico_id" id="tecnico_id" class="form-control" required>
                @foreach($tecnicos as $tecnico)
                    <option value="{{ $tecnico->id }}">{{ $tecnico->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="vehiculo_id">Vehículo</label>
            <select name="vehiculo_id" id="vehiculo_id" class="form-control">
                @foreach($vehiculos as $vehiculo)
                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->modelo }} - {{ $vehiculo->disponibilidad ? 'Disponible' : 'No Disponible' }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="material_estado">Materiales y Estado</label>
            <div style="display: flex; flex-direction: column; gap: 10px;">
                @foreach(['router', 'cable', 'antena', 'módem'] as $material)
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <input type="checkbox" name="materiales[]" value="{{ $material }}" id="material_{{ $material }}" 
                               onchange="toggleEstado('{{ $material }}')">
                        <span>{{ ucfirst($material) }}</span>
                        <select name="material_estado[{{ $material }}]" class="form-control" 
                                id="estado_{{ $material }}" disabled>
                            <option value="completamente usado">Completamente Usado</option>
                            <option value="alcanzó">Alcanzó</option>
                            <option value="no alcanzó">No Alcanzó</option>
                            <option value="sobró">Sobró</option>
                        </select>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Crear Orden</button>
    </form>
</div>

<script>
    function toggleEstado(material) {
        const estadoSelect = document.getElementById(`estado_${material}`);
        estadoSelect.disabled = !document.getElementById(`material_${material}`).checked;
    }
</script>
@endsection

