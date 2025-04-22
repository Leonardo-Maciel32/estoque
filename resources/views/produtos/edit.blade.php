@extends('layouts.app')
    <div class="bg-dark text-white p-2">    
        <h4>Estoque</h4>
    </div>
@section('content')
    

    <div class="container">
    <h1 class="mb-4 text-center">✏️ Editar Produto</h1>
                @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif       

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Necessário para enviar como PUT -->

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea name="descricao" class="form-control" required>{{ $produto->descricao }}</textarea>
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade:</label>
            <input type="number" name="quantidade" class="form-control" value="{{ $produto->quantidade }}" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" name="preco" class="form-control" value="{{ $produto->preco }}" required>
        </div>

        <div class="mb-3">
            <label for="fornecedor_id" class="form-label">Fornecedor:</label>
            <select name="fornecedor_id" class="form-control" required>
                <option value="">-- Selecione --</option>
                @foreach ($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}"
                        {{ $produto->fornecedor_id == $fornecedor->id ? 'selected' : '' }}>
                        {{ $fornecedor->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
