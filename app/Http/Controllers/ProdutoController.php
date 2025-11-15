<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // carregar categoria junto para evitar N+1
        $produtos = Produto::with('categoria')->orderBy('id','desc')->get();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $categorias = Categoria::orderBy('nome')->get();
        return view('produtos.create', compact('categorias'));
        
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'       => 'required|min:3|max:255',
            'quantidade' => 'required|integer|min:0',
            'preco'      => 'required|numeric|min:0',
            'categoria_id' => 'nullable|exists:categorias,id',
        ]);

        Produto::create($validated);

        return redirect()->route('produtos.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    public function edit(Produto $produto)
    {
        $categorias = Categoria::orderBy('nome')->get();
        return view('produtos.edit', compact('produto','categorias'));
    }

    public function update(Request $request, Produto $produto)
    {
        $validated = $request->validate([
            'nome'       => 'required|min:3|max:255',
            'quantidade' => 'required|integer|min:0',
            'preco'      => 'required|numeric|min:0',
            'categoria_id' => 'nullable|exists:categorias,id',
        ]);

        $produto->update($validated);

        return redirect()->route('produtos.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}
