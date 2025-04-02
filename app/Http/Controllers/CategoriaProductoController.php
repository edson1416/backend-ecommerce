<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    public function index(){
        try{
            $categorias = CategoriaProducto::all();
            return response()->json($categorias);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
