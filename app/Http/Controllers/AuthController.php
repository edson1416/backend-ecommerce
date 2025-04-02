<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(): JsonResponse {
        try {
            request()->validate([
                "email" => "required|email",
                "password" => "required"
            ]);

            $usuario = User::where('email', request()->email)->first();

            if(!$usuario || !Hash::check(request()->password, $usuario->password)){
                return response()->json(['error' => 'Credenciales incorrectas'],401);
            }
            else{
                if($usuario->deleted_at !== null){
                    return response()->json(['error' => 'Credenciales incorrectas'],401);
                }else{
                    return response()->json(['token' => $usuario->createToken('login',['*'],now()->addMinutes(24*60))->plainTextToken]);
                }
            }

        }catch (ValidationException $e){
            return response()->json(['message' => 'Error en la validación','error' => $e->errors()],400);
        }
    }

    public function userInfo(): JsonResponse {
       $usuario = request()->user();
       return response()->json(['user' => $usuario]);
    }

}
