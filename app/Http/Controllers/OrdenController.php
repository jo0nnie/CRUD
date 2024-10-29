<?php

namespace App\Http\Controllers;

use App\Models\Orden; 
use App\Models\Tecnico;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function index()
    {
        $ordenes = Orden::paginate(10);
        dd($ordenes); // Línea de depuración
        return view('orden.index', compact('ordenes'));
    }
    

    
    public function create()
    {
        $tecnicos = Tecnico::all();
        return view('orden.create', compact('tecnicos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero_orden' => 'required|unique:orden', // Cambié a 'orden'
            'direccion' => 'required',
            'tarea' => 'required',
            'cliente' => 'required',
            'fecha' => 'required|date',
            'tecnico_id' => 'required|exists:tecnicos,id'
        ]);

        Orden::create($validatedData);

        return redirect()->route('orden.index')->with('success', 'Felicidades, registraste la orden, capo');
    }

    public function show(Orden $orden)
    {
        return view('orden.show', compact('orden'));
    }

    public function edit(Orden $orden)
    {
        $tecnicos = Tecnico::all();
        return view('orden.edit', compact('orden', 'tecnicos'));
    }

    public function update(Request $request, Orden $orden)
    {
        $request->validate([
            'numero_orden' => 'required|unique:orden,numero_orden,' . $orden->id, // Cambié a 'orden'
            'direccion' => 'required',
            'tarea' => 'required',
            'cliente' => 'required',
            'fecha' => 'required|date',
            'tecnico_id' => 'required|exists:tecnicos,id'
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

