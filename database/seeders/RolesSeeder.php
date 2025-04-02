<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolAdmin = Role::create(['name' => 'admin','guard_name' => 'sanctum',]);
        $rolCliente = Role::create(['name' => 'cliente','guard_name' => 'sanctum',]);

        $rolCliente->syncPermissions(['mi-cuenta']);
    }
}
