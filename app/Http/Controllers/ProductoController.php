<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::all();
        return view("productos.index",compact("productos"));
    }
    public function show($id){
        $productos = Producto::findOrFail($id);
        return view("productos.show",compact("producto"));
    }
}
