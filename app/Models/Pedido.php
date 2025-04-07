<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'cliente_id',
        'total',
        'subtotal',
        'descuento',
    ];

    public function detalle(){
        return $this->hasMany(DetallePedido::class, 'pedido_id');
    }
}
