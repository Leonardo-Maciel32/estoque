@extends('layouts.app')
    <div class="bg-dark text-white p-2">
        <h4>Estoque</h4>
    </div>

@section('content')
    <div class="container">
    <h1 class="mb-4 text-center">📦 Lista de Produtos</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('produtos.create') }}" class="btn btn-primary">Adicionar Produto</a>
    </div>
    

    @if ($produtos->count() > 0)
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Descrição</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center">Preço</th>
                    <th class="text-center">Ações</th>
                    <th class="text-center">Fornecedor</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                        <td class="text-center">
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning">✏️ Editar</a>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">🗑️ Excluir</button>
                                <td>{{ $produto->fornecedor->nome ?? '-' }}</td>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info text-center">Nenhum produto cadastrado ainda.</div>
    @endif
</div>
@endsection
