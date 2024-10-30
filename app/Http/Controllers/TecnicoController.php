<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function index()
    {
        $tecnicos = Tecnico::paginate(10); // Usa paginate en lugar de get()
        return view('tecnicos.index', compact('tecnicos'));
    }
    

    public function create()
    {
        return view('tecnicos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:tecnicos,email',
        ]);

        Tecnico::create($request->all());

        return redirect()->route('tecnicos.index')->with('success', 'Técnico registrado exitosamente.');
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
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:tecnicos,email,' . $tecnico->id,
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