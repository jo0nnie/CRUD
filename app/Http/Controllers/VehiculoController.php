<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::paginate(10); 
        return view('vehiculos.index', compact('vehiculos'));
    }
    

    public function create()
    {
        return view('vehiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'estado' => 'required|string',
            'modelo' => 'required|string',
            'stock' => 'required|integer',
            'disponibilidad' => 'required|string',
            'equipo_trabajo' => 'required|string',
        ]);
    
        Vehiculo::create($request->all());
    
        return redirect()->route('vehiculos.index')
                         ->with('success', 'Vehículo creado con éxito.');
    }
    
    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'estado' => 'required|string|in:nuevo,Viejo,roto,arreglado',
            'modelo' => 'required|string',
            'stock' => 'required|integer|min:1',
            'disponibilidad' => 'required|string|in:disponible,no_disponible',
            'equipo_trabajo' => 'required|string|in:conexion,desconexion,instalacion_domiciliaria,reconexion',
        ]);

        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update($validatedData);
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado exitosamente.');
    }

    public function show($id)
{
    $vehiculo = Vehiculo::findOrFail($id); 
    return view('vehiculo.show', compact('vehiculo')); 
}


    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado exitosamente.');
    }
}

