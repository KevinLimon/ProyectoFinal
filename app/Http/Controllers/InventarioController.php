<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos["inventario"] = Inventario::Paginate(5);
        return view('inventario.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos = [
        'Nombre'=>'required|string|max:50',
        'Cantidad'=>'required|float|max:20',
        'Unidad'=>'required',
        'Fecha'=>'required|date',
        'Proveedor'=>'required|string|max:50',
        ];

        $mensaje = [
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosInventario = request()->except('_token');
        Inventario::insert($datosInventario);
        return redirect('inventario')->with('mensaje', 'Producto añadido con exito');
        //return response()->json($datosInventario);   
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosInventario = request()->except(['_token', '_method']);
        Inventario::where('id','=', $id)->update($datosInventario);
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Inventario::destroy($id);
        return redirect('inventario')->with('mensaje', 'Producto borrado con exito');
    }
}
