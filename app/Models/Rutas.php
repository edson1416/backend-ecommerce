<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    public function children(){
        return $this->hasMany(Rutas::class, 'parent_id');
    }

    public function parent(){
        return $this->belongsTo(Rutas::class, 'parent_id');
    }
}
