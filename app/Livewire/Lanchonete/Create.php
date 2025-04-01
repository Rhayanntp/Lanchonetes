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

    protected $rules = [
        'nome' => 'required|string|max:80',
        'endereco' => 'required|string|max:60',
        'telefone' => 'required|string|max:20',
        'cpf' => 'required|cpf|unique:clientes',
        'email' => 'required|email|unique:clientes',
        'password' => 'required|min:6',
    ];

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
