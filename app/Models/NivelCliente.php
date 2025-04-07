<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelCliente extends Model
{
    protected $fillable = ['nivel','descripcion'];
    protected $hidden = ['created_at','updated_at'];

    public function clientes(){
        return $this->hasMany(Cliente::class,'nivel_id');
    }
}
