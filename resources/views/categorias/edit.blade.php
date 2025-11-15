<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-lg mx-auto mt-10 bg-white shadow p-6 rounded">
    <h1 class="text-2xl font-bold mb-4">Editar Categoria</h1>

    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block mb-2">Nome da Categoria:</label>
        <input type="text" name="nome"
               class="w-full border p-2 rounded"
               value="{{ old('nome', $categoria->nome) }}">

        @error('nome')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <button class="bg-blue-600 text-white px-4 py-2 rounded mt-4 hover:bg-blue-700">
            Atualizar
        </button>

        <a href="{{ route('categorias.index') }}" class="ml-4 text-gray-700 hover:underline">
            Cancelar
        </a>
    </form>
</div>

</body>
</html>
