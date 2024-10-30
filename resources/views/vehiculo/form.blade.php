        <div class="row padding-1 p-1">
            <div class="col-md-12">
                
            <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $vehiculo->descripcion ?? '') }}">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" value="{{ old('modelo', $vehiculo->modelo ?? '') }}">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock', $vehiculo->stock ?? '') }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Vehículo</button>
</div>