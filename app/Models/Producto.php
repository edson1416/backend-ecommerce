<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'precio',
        'imagen',
        'calificacion',
        'stock',
        'id_categoria'
    ];

    public function categoria(){
        return $this->belongsTo(CategoriaProducto::class, 'id_categoria');
    }


}
