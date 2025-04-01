<?php

namespace App\Livewire\Lanchonete;

use App\Models\Cliente;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $endereço;
    public $telefone;
    public $cpf;
    public $email;
    public $password;


    public function render()
    {
        return view('livewire.lanchonete.create');
    }

    public function store(){
        Cliente::create([
        'nome' => $this->nome,
        'endereço' => $this->endereço,
        'telefone' => $this->telefone,
        'cpf' => $this->cpf,
        'email' => $this->email,
        'password' => $this->password
        ]);
    }
}
