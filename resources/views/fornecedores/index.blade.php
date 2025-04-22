@extends('layouts.app')
    <div class="bg-dark text-white p-2">
        <h4>Estoque</h4>
    </div>

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center">📦 Fornecedores</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('fornecedores.create') }}" class="btn btn-primary mb-3">Adicionar Fornecedor</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">CNPJ</th>
            <th class="text-center">Telefone</th>
            <th class="text-center">Email</th>
            <th class="text-center">Cidade</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fornecedores as $fornecedor)
        <tr>
            <td>{{ $fornecedor->nome }}</td>
            <td>{{ $fornecedor->cnpj }}</td>
            <td>{{ $fornecedor->telefone }}</td>
            <td>{{ $fornecedor->email }}</td>
            <td>{{ $fornecedor->cidade }}</td>
            <td>{{ $fornecedor->estado }}</td>
            <td class="text-center">
                <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir este fornecedor?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
