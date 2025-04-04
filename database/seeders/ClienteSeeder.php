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
            'nome' => 'Xavier',
            'endereco' => 'Rua X, 123',
            'telefone' => '987654321',
            'cpf' => '12345678901',
            'email' => 'xavier@exemplo.com',
            'password' => '123456'
        ]);
    }
}
