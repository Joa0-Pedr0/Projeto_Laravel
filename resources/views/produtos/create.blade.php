<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Novo Produto</title>
</head>
<body class="bg-gray-100 p-6">

<h1 class="text-3xl font-bold mb-6">Cadastrar Produto</h1>

@if ($errors->any())
    <div class="bg-red-500 text-white p-3 rounded mb-4">
        <ul class="list-disc ml-6">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('produtos.store') }}" method="POST"
      class="bg-white p-6 shadow rounded w-96 space-y-3">
    @csrf

    <label class="block">
        Nome:
        <input type="text" name="nome" class="w-full border p-2 rounded" value="{{ old('nome') }}">
    </label>

    <label class="block">
        Quantidade:
        <input type="number" name="quantidade" class="w-full border p-2 rounded" value="{{ old('quantidade',0) }}">
    </label>

    <label class="block">
        Preço:
        <input type="text" name="preco" class="w-full border p-2 rounded" value="{{ old('preco','0.00') }}">
    </label>

    <label class="block">
        Categoria:
        <select name="categoria_id" class="w-full border p-2 rounded">
            <option value="">— Sem categoria —</option>
            @foreach($categorias as $c)
                <option value="{{ $c->id }}" {{ old('categoria_id') == $c->id ? 'selected' : '' }}>
                    {{ $c->nome }}
                </option>
            @endforeach
        </select>
    </label>

    <div class="flex items-center gap-3">
        <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Salvar</button>
        <a href="{{ route('produtos.index') }}" class="text-blue-600 hover:underline">Voltar</a>
    </div>
</form>

</body>
</html>
