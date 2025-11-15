<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('nome')->get();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255|unique:categorias,nome',
            'descricao' => 'nullable|string',
        ]);

        Categoria::create($data);
        return redirect()->route('categorias.index')->with('success','Categoria criada com sucesso!');
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $data = $request->validate([
            'nome' => "required|string|max:255|unique:categorias,nome,{$categoria->id}",
            'descricao' => 'nullable|string',
        ]);

        $categoria->update($data);
        return redirect()->route('categorias.index')->with('success','Categoria atualizada com sucesso!');
    }

    public function destroy(Categoria $categoria)
    {
        // opcional: impedir exclusão se tiver produtos, ou definir comportamento
        if ($categoria->produtos()->exists()) {
            return redirect()->route('categorias.index')->with('error', 'Não é possível excluir uma categoria com produtos.');
        }

        $categoria->delete();
        return redirect()->route('categorias.index')->with('success','Categoria excluída com sucesso!');
    }
}
