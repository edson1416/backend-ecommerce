<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
           ['name' => 'mi-cuenta','guard_name' => 'sanctum',],
        ])->each(function($permiso){
            Permission::create($permiso);
        });
    }
}
