<?php

namespace Database\Seeders;

use App\Models\CategoriaProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nombre_categoria' => 'Gaming',
                'descripcion' => 'Productos enfocados a videojuegos'
            ],
            [
                'nombre_categoria' => 'Musica',
                'descripcion' => 'Productos enfocados a la musica'
            ],
            [
                'nombre_categoria' => 'Informatica',
                'descripcion' => 'Productos enfocados a la informatica'
            ],
        ])->each(function ($categoria){
            CategoriaProducto::create($categoria);
        });
    }
}
