<?php

namespace App\Http\Controllers;

use App\Models\Rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function index(){
        try {
            $rutas = Rutas::with('children')->whereNull('parent_id')->get();
            return response()->json($rutas);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
