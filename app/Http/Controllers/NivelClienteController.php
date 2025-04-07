<?php

namespace App\Http\Controllers;

use App\Models\NivelCliente;
use Illuminate\Http\Request;

class NivelClienteController extends Controller
{
    public function index()
    {
        try{
            $nivelClientes = NivelCliente::all();
            return response()->json(['data' => $nivelClientes]);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
