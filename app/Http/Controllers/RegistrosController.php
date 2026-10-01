<?php

namespace App\Http\Controllers;
use App\Models\Registros;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Registros::all();
        return view('registros.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registros = new Registros();
            $registros->cliente = $request->cliente;
            $registros->telefono = $request->telefono;
            $registros->tipo_producto = $request->tipo_producto;
            $registros->cantidad = $request->cantidad;
            $registros->descripcion = $request->descripcion;
            $registros->precio = $request->precio;
            $registros->estado = $request->estado;
        
            $registros->save();
            return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registros = Registros::findOrFail($id);
        return view('registros.edit', compact('registros'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $registros = Registros::findOrFail($id);
            $registros->cliente = $request->cliente;
            $registros->telefono = $request->telefono;
            $registros->tipo_producto = $request->tipo_producto;
            $registros->cantidad = $request->cantidad;
            $registros->descripcion = $request->descripcion;
            $registros->precio = $request->precio;
            $registros->estado = $request->estado;
            $registros->save();
            
            return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $registros = Registros::findOrFail($id);
            $registros->delete();

            return redirect()->route('registros.index');
    }
}
