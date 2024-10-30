<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Tecnico;
use App\Models\Vehiculo;
use App\Models\Material;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function index()
    {
        $ordenes = Orden::paginate(10); // Ajusta el modelo y la paginación según sea necesario
        return view('orden.index', compact('ordenes')); // Asegúrate de que el nombre de la vista sea correcto
    }
    public function create()
    {
        $tecnicos = Tecnico::all();
        $vehiculos = Vehiculo::all(); // Obtener todos los vehículos, independientemente de la disponibilidad
        $materiales = Material::all();
        return view('orden.create', compact('tecnicos', 'vehiculos', 'materiales'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'tarea' => 'required',
            'numero_orden' => 'required', // Asegúrate de validar este campo
            'tecnico_id' => 'required|exists:tecnicos,id', // Asegúrate de que sea un ID válido
            'vehiculo_id' => 'nullable|exists:vehiculos,id',
        ]);

        $orden = new Orden();
        $orden->numero_orden = $request->input('numero_orden');
        $orden->direccion = $request->input('direccion');
        $orden->tarea = $request->input('tarea');
        $orden->tecnico_id = $request->input('tecnico_id');
        $orden->vehiculo_id = $request->input('vehiculo_id');
        $orden->fecha = $request->input('fecha');
        $orden->cliente = $request->input('cliente');
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
        $orden = Orden::find($id);
        return view('orden.show', compact('orden'));
    }


    public function update(Request $request, Orden $orden)
    {
        $request->validate([
            'numero_orden' => 'required|unique:orden,numero_orden,' . $orden->id,
            'direccion' => 'required',
            'tarea' => 'required',
            'cliente' => 'required',
            'fecha' => 'required|date',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'estado' => 'required'
        ]);

        $orden->update($request->all());

        return redirect()->route('orden.index')->with('success', 'Orden actualizada exitosamente');
    }

    public function destroy($id)
    {
        $orden = Orden::find($id);
        if ($orden) {
            $orden->delete();
            return redirect()->route('orden.index')->with('success', 'Orden eliminada correctamente.');
        } else {
            return redirect()->route('orden.index')->with('error', 'Orden no encontrada.');
        }
    }
}
