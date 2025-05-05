<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class ApiCategoriaController extends Controller
{
    /**
     * Mostrar un listado de todas las categorías.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json([
            'status' => 'success',
            'data' => $categorias
        ]);
    }

    /**
     * Almacenar una nueva categoría en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $categoria = Categoria::create($request->all());
        
        return response()->json([
            'status' => 'success',
            'message' => 'Categoría creada exitosamente',
            'data' => $categoria
        ], 201);
    }

    /**
     * Mostrar una categoría específica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        
        return response()->json([
            'status' => 'success',
            'data' => $categoria
        ]);
    }

    /**
     * Actualizar una categoría específica en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        
        return response()->json([
            'status' => 'success',
            'message' => 'Categoría actualizada exitosamente',
            'data' => $categoria
        ]);
    }

    /**
     * Eliminar una categoría específica de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Categoría eliminada exitosamente'
        ]);
    }
}
