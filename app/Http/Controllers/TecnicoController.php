<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function index()
    {
        $tecnicos = Tecnico::paginate(10); 
        return view('tecnicos.index', compact('tecnicos'));
    }
    
    public function create()
    {
        return view('tecnicos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string',
            'grupo_trabajo' => 'required|string',
            'disponibilidad' => 'required|string',
            'telefono' => 'required|string',
        ]);
    
        $tecnico = new Tecnico();
        $tecnico->nombre = $request->nombre;
        $tecnico->apellido = $request->apellido;
        $tecnico->especialidad = $request->especialidad;
        $tecnico->grupo_trabajo = $request->grupo_trabajo;
        $tecnico->disponibilidad = $request->disponibilidad;
        $tecnico->telefono = $request->telefono;
        $tecnico->save(); 
    
        return redirect()->route('tecnicos.index')->with('success', 'Técnico creado exitosamente.');
    }
        
    public function show(Tecnico $tecnico)
    {
        return view('tecnicos.show', compact('tecnico'));
    }

    public function edit(Tecnico $tecnico)
    {
        return view('tecnicos.edit', compact('tecnico'));
    }

    public function update(Request $request, Tecnico $tecnico)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string',
            'grupo_trabajo' => 'required|string',
            'disponibilidad' => 'required|string',
            'telefono' => 'required|string',
        ]);
        
        $tecnico->update($request->all());

        return redirect()->route('tecnicos.index')->with('success', 'Técnico actualizado exitosamente.');
    }

    public function destroy(Tecnico $tecnico)
    {
        $tecnico->delete();
        return redirect()->route('tecnicos.index')->with('success', 'Técnico eliminado exitosamente.');
    }
}