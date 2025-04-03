<?php

namespace Database\Seeders;

use App\Models\Administrador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrador::create([
            'nome' => 'Silva',
            'cpf' => '12345678902',
            'email' => 'silva@exemplo.com',
            'password' => Hash::make('123456')
        ]);
    }
}
