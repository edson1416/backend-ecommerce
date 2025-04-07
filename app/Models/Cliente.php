<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'dui',
        'telefono',
        'direccion',
        'nivel_id',
        'user_id'
    ];

   public function nivel(){
       return $this->belongsTo(NivelCliente::class, 'nivel_id');
   }
}
