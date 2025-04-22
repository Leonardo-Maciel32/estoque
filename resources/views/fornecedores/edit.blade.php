@extends('layouts.app')
    <div class="bg-dark text-white p-2">
        <h4>Estoque</h4>
    </div>
@section('content') 
    
    <div class="container mt-5">
        <h1 class="mb-4 text-center">✏️ Editar Fornecedor</h1>

    <form action="{{ route('fornecedores.update', $fornecedor->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Laravel exige isso para simular método PUT --}}

        <div class="mb-3">
            <label for="nome" class="form-label" tex>Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $fornecedor->nome }}" required>
        </div>
        
        <div class="mb-3">
            <label for="cnpj" class="form-label">CNPJ:</label>
            <input type="text" name="cnpj" class="form-control" value="{{ $fornecedor->cnpj }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" name="telefone" class="form-control" value="{{ $fornecedor->telefone }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $fornecedor->email }}" required>
        </div>
        
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" name="cidade" class="form-control" value="{{ $fornecedor->cidade }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <input type="text" name="estado" class="form-control" value="{{ $fornecedor->estado }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('fornecedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
