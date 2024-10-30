<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {
        $vehiculos = Vehiculo::paginate(10);
        return view('vehiculo.index', compact('vehiculos'))
            ->with('i', ($request->input('page', 1) - 1) * $vehiculos->perPage());
    }

    public function create()
    {
        return view('vehiculo.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'descripcion' => 'required|string',  // Cambiado aquí
            'modelo' => 'required|string',
            'stock' => 'required|integer',
            'equipo_trabajo' => 'required|string',
        ]);
    
        // Asegúrate de usar el método only() correctamente
        Vehiculo::create($request->only('descripcion', 'modelo', 'stock', 'equipo_trabajo'));
    
        return Redirect::route('vehiculos.index')
            ->with('success', 'El vehículo ha sido creado correctamente.');
    }
    
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.show', compact('vehiculo'));
    }

    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo): RedirectResponse
    {
        $request->validate([
            'descripcion' => 'required|string',  // Cambiado aquí
            'modelo' => 'required|string',
            'stock' => 'required|integer',
            'equipo_trabajo' => 'required|string',
        ]);

        // Aquí cambiamos 'description' por 'descripcion'
        $vehiculo->update($request->only('descripcion', 'modelo', 'stock', 'equipo_trabajo'));

        return Redirect::route('vehiculos.index')
            ->with('success', 'El vehículo ha sido editado correctamente.');
    }

    public function destroy($id): RedirectResponse
    {
        Vehiculo::find($id)->delete();

        return Redirect::route('vehiculos.index')
            ->with('success', 'El vehículo ha sido eliminado correctamente.');
    }
}
