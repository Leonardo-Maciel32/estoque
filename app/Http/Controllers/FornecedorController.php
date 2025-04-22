<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    // Lista todos os fornecedores
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    // Exibe o formulário de cadastro
    public function create()
    {
        $fornecedores = Fornecedor::all(); 
        return view('fornecedores.create', compact('fornecedores'));
    }


    // Salva um novo fornecedor no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'nullable|email',
            'telefone' => 'nullable',
            'empresa' => 'nullable',
        ]);

        Fornecedor::create($request->all());

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    // Exibe o formulário de edição
    public function edit($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedores.edit', compact('fornecedor'));
    }

    // Atualiza o fornecedor no banco
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'nullable|email',
            'telefone' => 'nullable',
            'empresa' => 'nullable',
        ]);

        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor atualizado com sucesso!');
    }

    // Exclui um fornecedor
    public function destroy($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedor excluído com sucesso!');
    }
}
