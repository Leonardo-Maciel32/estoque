@extends('layouts.app')
    <div class="bg-dark text-white p-2">
        <h4>Estoque</h4>
    </div>
@section('content')
<div class="container mt-3">
    <div class="text-center mb-3">
        <h1 class="display-10 fw-bold">📦 Sistema de Estoque</h1>
        <p class="lead text-muted">Gerencie seus produtos e fornecedores de forma simples e rápida.</p>
    </div>

    <div id="meuCarrossel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('imagens/imagens_estoque1.jpg') }}" class="d-block w-100" alt="Imagem 1" style="height: 30vh; object-fit: contain;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagens/imagens_estoque2.jpg') }}" class="d-block w-100" alt="Imagem 1" style="height: 30vh; object-fit: contain;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagens/imagens_estoque3.jpg') }}" class="d-block w-100" alt="Imagem 1" style="height: 30vh; object-fit: contain;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#meuCarrossel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#meuCarrossel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="row justify-content-center g-4">
        {{-- Card Produtos --}}
        <div class="col-md-5">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-box-seam fs-1 text-primary"></i>
                    </div>
                    <h5 class="card-title">Produtos</h5>
                    <p class="card-text fs-2 fw-bold">{{ $totalProdutos }}</p>
                    <a href="{{ route('produtos.index') }}" class="btn btn-primary">Ver Produtos</a>
                </div>
            </div>
        </div>

        {{-- Card Fornecedores --}}
        <div class="col-md-5">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-truck fs-1 text-success"></i>
                    </div>
                    <h5 class="card-title">Fornecedores</h5>
                    <p class="card-text fs-2 fw-bold">{{ $totalFornecedores }}</p>
                    <a href="{{ route('fornecedores.index') }}" class="btn btn-success">Ver Fornecedores</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
