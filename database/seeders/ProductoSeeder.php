<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre_producto' => 'Teclado mecanico',
            'descripcion' => 'Teclado mecanico con switch rojos',
            'precio' => 56.56,
            'imagen' => asset('storage/img/teclado.jpg'),
            'id_categoria' => 2,
        ]);
    }
}
