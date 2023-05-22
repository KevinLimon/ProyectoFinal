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
        $datos["inventario"] = Inventario::Paginate(1);
        return view('inventario.index',$datos);
        //return Inventario::all();
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
        'Cantidad'=>'required|numeric',
        'Unidad'=>'required',
        'Fecha'=>'required|date',
        'Proveedor'=>'required|string|max:50',
        ];

        $mensaje = [
            'required'=>'El campo :attribute es requerido'
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
        return $inventario;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //$this->authorize('author', $id);
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        //$this->authorize('author', $id);

        $campos = [
            'Nombre'=>'required|string|max:50',
            'Cantidad'=>'required|numeric',
            'Unidad'=>'required',
            'Fecha'=>'required|date',
            'Proveedor'=>'required|string|max:50',
            ];
    
            $mensaje = [
                'required'=>'El campo :attribute es requerido'
            ];
    
            $this->validate($request, $campos, $mensaje);

        $datosInventario = request()->except(['_token', '_method']);
        Inventario::where('id','=', $id)->update($datosInventario);
        $inventario=Inventario::findOrFail($id);
        //return view('inventario.edit', compact('inventario'));
        return redirect('inventario')->with('mensaje', 'Producto modificado  con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        //$this->authorize('author', $id);
        Inventario::destroy($id);
        return redirect('inventario')->with('mensaje', 'Producto borrado con exito');
    }
}
