<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;

Route::get('/', function () {
    return view('home');
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('produtos', ProdutoController::class);

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::resource('fornecedores', FornecedorController::class);
