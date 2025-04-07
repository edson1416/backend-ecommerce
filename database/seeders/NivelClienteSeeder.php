<?php

namespace Database\Seeders;

use App\Models\NivelCliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nivel' => 'Cliente Bronce',
                'descripcion' => 'Cliente con menos de 5 pedidos'
            ],
            [
                'nivel' => 'Cliente Plata',
                'descripcion' => 'Cliente con mas de 5 pedidos pero menos de 10'
            ],
            [
                'nivel' => 'Cliente Oro',
                'descripcion' => 'Cliente con mas de 10 pedidos pero menos de 20'
            ],
            [
                'nivel' => 'Cliente Diamante',
                'descripcion' => 'Cliente con mas de 20 pedidos'
            ],
        ])->each(function($nivel){
            NivelCliente::create($nivel);
        });
    }
}
