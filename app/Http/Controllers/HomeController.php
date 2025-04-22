<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Fornecedor;

class HomeController extends Controller
{

public function index()
{
    $totalProdutos = Produto::count();
    $totalFornecedores = Fornecedor::count();

    return view('home', compact('totalProdutos', 'totalFornecedores'));
}

}
