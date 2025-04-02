<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdmin = User::create([
            'name' => 'Edson Sarmiento',
            'email' => 'edsonariel.sarmiento@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $userCliente = User::create([
            'name' => 'Celina Martinez',
            'email' => 'celi@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $userAdmin->assignRole('admin');
        $userCliente->assignRole('cliente');
    }
}
