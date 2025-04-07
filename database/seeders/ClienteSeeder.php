<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Celina Beatriz',
            'apellido' => 'Martinez',
            'dui' => '06049488-9',
            'telefono' => '78986545',
            'direccion' => 'Col. san patricio',
            'nivel_id' => 1,    //por defecto nivel Bronce = 1
            'user_id' => 2,     //id de usuario cliente creado en seeder UserSeeder
        ]);
    }
}
