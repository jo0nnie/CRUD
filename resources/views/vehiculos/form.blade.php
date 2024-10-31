<div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $vehiculo->descripcion ?? '') }}" required>
</div>

<div class="form-group">
    <label for="estado">Estado</label>
    <select name="estado" id="estado" class="form-control">
        <option value="">Seleccionar estado</option>
        <option value="nuevo" {{ (old('estado', $vehiculo->estado ?? '') == 'nuevo') ? 'selected' : '' }}>Nuevo</option>
        <option value="viejo" {{ (old('estado', $vehiculo->estado ?? '') == 'viejo') ? 'selected' : '' }}>Viejo</option>
        <option value="roto" {{ (old('estado', $vehiculo->estado ?? '') == 'roto') ? 'selected' : '' }}>Roto</option>
        <option value="arreglado" {{ (old('estado', $vehiculo->estado ?? '') == 'arreglado') ? 'selected' : '' }}>Arreglado</option>
    </select>
</div>

<div class="form-group">
    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control" value="{{ old('modelo', $vehiculo->modelo ?? '') }}" required>
</div>

<div class="form-group">
    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock', $vehiculo->stock ?? '') }}" min="1" required>
</div>

<div class="form-group">
    <label for="disponibilidad">Disponibilidad</label>
    <select name="disponibilidad" id="disponibilidad" class="form-control">
        <option value="disponible" {{ (old('disponibilidad', $vehiculo->disponibilidad ?? '') == 'disponible') ? 'selected' : '' }}>Disponible</option>
        <option value="no_disponible" {{ (old('disponibilidad', $vehiculo->disponibilidad ?? '') == 'no_disponible') ? 'selected' : '' }}>No Disponible</option>
    </select>
</div>

<div class="form-group">
    <label for="equipo_trabajo">Equipo de Trabajo</label>
    <select name="equipo_trabajo" id="equipo_trabajo" class="form-control">
        <option value="conexion" {{ (old('equipo_trabajo', $vehiculo->equipo_trabajo ?? '') =
