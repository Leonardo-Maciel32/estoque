@extends('layouts.app')
    <div class="bg-dark text-white p-2">
        <h4>Estoque</h4>
    </div>
@section('content')

    <div class="container">
        <h1 class="mb-4 text-center">📝 Cadastrar Novo Produto</h1>
    </div>
    
    <form action="{{ route('produtos.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Ex: Mouse Gamer" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea name="descricao" class="form-control" rows="3" placeholder="Ex: Mouse com iluminação RGB, 16000 DPI" required></textarea>
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade:</label>
            <input type="number" name="quantidade" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço (R$):</label>
            <input type="text" name="preco" class="form-control" placeholder="Ex: 129.90" required>
        </div>
        
        <div class="mb-3">
            <label for="fornecedor_id" class="form-label">Fornecedor:</label>
            <select name="fornecedor_id" class="form-control" required>
                <option value="">-- Selecione --</option>
        @foreach ($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}" {{ old('fornecedor_id') == $fornecedor->id ? 'selected' : '' }}>
                {{ $fornecedor->nome }}
                    </option>
        @endforeach
                </select>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary ">Voltar</a>
        </div>
    </form>
</div>
@endsection
