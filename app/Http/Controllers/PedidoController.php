<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PedidoController extends Controller
{
    public function index(){
        try {
            $pedidos = Pedido::all();
            return response()->json(["data"=>$pedidos]);
        }catch (\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    public function crearPedido(Request $request){
        try{

            $validator = Validator::make($request->all(),[
                "productos" => "required|array",
            ]);

            if ($validator->fails()){
                return response()->json(['error'=>$validator->errors()]);
            }else{
                $idUsuario = auth()->id();
                $descuento = 0;
                $subtotal = 0;
                $total = 0;

                $cliente = Cliente::where('user_id', $idUsuario)->first();

                if ($cliente->nivel_id == 3){
                    $descuento = 0.10;
                }else if($cliente->nivel_id == 4){
                    $descuento = 0.20;
                }

                $pedido = Pedido::create([
                    "cliente_id" => $cliente->id,
                    "subtotal" => $subtotal,
                    "descuento" => $descuento,
                    "total" => $total,
                ]);

                $productsArray = $request->productos;

                foreach ($productsArray as $producto){
                    $productoRegistro = Producto::find($producto["id_producto"]);
                    $totalProducto = $producto["cantidad"] * $productoRegistro->precio;
                    $subtotal += $totalProducto;

                    DetallePedido::create([
                        "pedido_id" => $pedido->id,
                        "producto_id" => $productoRegistro->id,
                        "cantidad" => $producto["cantidad"],
                    ]);
                }
                $total = $subtotal - ($subtotal * $descuento);

                $pedido->subtotal = $subtotal;
                $pedido->descuento = $descuento;
                $pedido->total = $total;
                $pedido->save();

                return response()->json(['message'=>"Pedido registrado"],201);
            }
        }catch (\Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}
