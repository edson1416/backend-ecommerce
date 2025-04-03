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

        collect([
            [
                'nombre_producto' => 'Teclado mecanico',
                'descripcion' => 'Teclado mecanico con switch rojos',
                'precio' => 56.56,
                'imagen' => asset('storage/img/teclado.jpg'),
                'id_categoria' => 3,
            ],
            [
                'nombre_producto' => 'Guitarra electrica',
                'descripcion' => 'Guitarra electrica Gibson',
                'precio' => 499.95,
                'imagen' => asset('storage/img/guitarra.jpg'),
                'id_categoria' => 2,
            ],
            [
                'nombre_producto' => 'Controll Switch',
                'descripcion' => 'Control de nintendo switch pro',
                'precio' => 79.95,
                'imagen' => asset('storage/img/control.jpg'),
                'id_categoria' => 1,
            ],
        ])->each(function ($producto) {
            Producto::create($producto);
        });
    }
}
