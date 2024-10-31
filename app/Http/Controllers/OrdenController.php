<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Tecnico;
use App\Models\Vehiculo;

use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function index()
    {
        $ordenes = Orden::with(['tecnico', 'vehiculo'])->paginate(10);
        return view('orden.index', compact('ordenes'));
    }    

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
            'acciones' => 'nullable|array', 
        ]);

        $orden = new Orden();
        $orden->numero_orden = $request->numero_orden;
        $orden->direccion = $request->direccion;
        $orden->tarea = $request->tarea;
        $orden->cliente = $request->cliente;
        $orden->fecha = $request->fecha;
        $orden->tecnico_id = $request->tecnico_id;

        $orden->acciones = $request->acciones ? json_encode($request->acciones) : null;

        $orden->save();
    
        return redirect()->route('orden.index')->with('success', 'Orden creada exitosamente.');
    }

    public function show(Orden $orden)
    {
        return view('orden.show', compact('orden'));
    }

    public function edit(Orden $orden)
    {
        $tecnicos = Tecnico::all();
        $vehiculos = Vehiculo::all();
        return view('orden.edit', compact('orden', 'tecnicos', 'vehiculos'));
    }

    public function update(Request $request, Orden $orden)
    {
        $validatedData = $request->validate([
            'numero_orden' => 'required',
            'direccion' => 'required',
            'tarea' => 'required',
            'cliente' => 'required',
            'fecha' => 'required|date',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'acciones' => 'nullable|array', 
        ]);

        $orden->numero_orden = $request->numero_orden;
        $orden->direccion = $request->direccion;
        $orden->tarea = $request->tarea;
        $orden->cliente = $request->cliente;
        $orden->fecha = $request->fecha;
        $orden->tecnico_id = $request->tecnico_id;

        $orden->acciones = $request->acciones ? json_encode($request->acciones) : null;

        $orden->save();

        return redirect()->route('orden.index')->with('success', 'Orden actualizada exitosamente.');
    }

    public function destroy(Orden $orden)
    {
        $orden->delete();

        return redirect()->route('orden.index')->with('success', 'Orden eliminada exitosamente.'); 
    }
}
