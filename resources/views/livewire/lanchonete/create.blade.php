<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <!-- Link do Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Outros links e scripts -->
    @livewireStyles
</head>
<body class="bg-gray-100">


    <div class="max-w-lg mx-auto mt-10 px-4">
        <form wire:submit.prevent="salvar" class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Cadastro de Cliente</h2>
    
            <!-- Nome -->
            <div class="mb-4">
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="nome" wire:model="nome" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('nome') 
                    <span class="text-red-500 text-xs">{{ $message }}</span> 
                @enderror
            </div>
    
            <!-- Endereço -->
            <div class="mb-4">
                <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço</label>
                <input type="text" id="endereco" wire:model="endereco" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('endereco') 
                    <span class="text-red-500 text-xs">{{ $message }}</span> 
                @enderror
            </div>
    
            <!-- Telefone -->
            <div class="mb-4">
                <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                <input type="text" id="telefone" wire:model="telefone" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('telefone') 
                    <span class="text-red-500 text-xs">{{ $message }}</span> 
                @enderror
            </div>
    
            <!-- CPF -->
            <div class="mb-4">
                <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                <input type="text" id="cpf" wire:model="cpf" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('cpf') 
                    <span class="text-red-500 text-xs">{{ $message }}</span> 
                @enderror
            </div>
    
            <!-- E-mail -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" wire:model="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('email') 
                    <span class="text-red-500 text-xs">{{ $message }}</span> 
                @enderror
            </div>
    
            <!-- Senha -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="password" wire:model="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('password') 
                    <span class="text-red-500 text-xs">{{ $message }}</span> 
                @enderror
            </div>
    
            <!-- Botão de Submit -->
            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Cadastrar
            </button>
        </form>
    </div>

    
</body>
</html>


