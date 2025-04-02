<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    protected $fillable = ['nombre_categoria','descripcion'];
    protected $hidden = ['created_at','updated_at'];

    public function productos(){
        return $this->hasMany(Producto::class,'id_categoria');
    }
}
