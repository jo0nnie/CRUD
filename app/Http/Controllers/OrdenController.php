<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Tecnico;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function create()
    {
        $tecnicos = Tecnico::all();
        $vehiculos = Vehiculo::all();
        return view('orden.create', compact('tecnicos', 'vehiculos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero_orden' => 'required',
            'direccion' => 'required',
            'tarea' => 'required',
            'cliente' => 'required',
            'fecha' => 'required|date',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'acciones' => 'nullable|array', // Para opciones múltiples en "acciones"
        ]);

        $orden = new Orden($validatedData);
        $orden->acciones = json_encode($request->acciones); // Guardar acciones como JSON
        $orden->save();

        return redirect()->route('orden.index')->with('success', 'Orden creada con éxito.');
    }

    public function edit(Orden $orden)
    {
        $tecnicos = Tecnico::all();
        $vehiculos = Vehiculo::all();
        return view('orden.edit', compact('orden', 'tecnicos', 'vehiculos'));
    }
}
