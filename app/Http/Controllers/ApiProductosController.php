<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ApiProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Productos = Producto::create([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'stock' => $request->input('stock')
        ]);
        return response()->json($Productos, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productos = Producto::find(id: $id);
        if ($productos) {
            return response()->json($productos, 200);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            $producto->update($request->all());
            return response()->json($producto, 200);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            $producto->delete();
            return response()->json(null, 204);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }
}
