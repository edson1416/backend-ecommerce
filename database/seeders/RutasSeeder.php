<?php

namespace Database\Seeders;

use App\Models\Rutas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'label' => 'Inicio',
                'icon' => 'pi pi-home',
                'to' => '/'
            ],
            [
                'label' => 'Favoritos',
                'icon' => 'pi pi-star',
                'to' => '/favoritos'
            ],
        ])->each(function($item) {
            Rutas::create($item);
        });
        //Creando ruta padre
        $categorias = DB::table('rutas')->insertGetId([
            'label' => 'Categorias',
            'icon' => 'pi pi-bars',
        ]);
        collect([
            [
                'label' => 'Gamer',
                'icon' => 'pi pi-headphones',
                'to' => '/productos',
                'parent_id' => $categorias
            ],
            [
                'label' => 'Mi carrito',
                'icon' => 'pi pi-shopping-cart',
                'to' => '/mi-carrito'
            ],
            [
                'label' => 'Mi cuenta',
                'icon' => 'pi pi-user',
                'to' => '/mi-cuenta'
            ],
        ])->each(function($item){
            Rutas::create($item);
        });
    }
}
